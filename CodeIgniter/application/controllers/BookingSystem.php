<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingSystem extends CI_Controller {

	public function index() {
		$this->load->library('session');

		//$this->load->view('welcome_message');
		$data["pageTitle"] = "Booking System";
		$this->load->database();
		$this->load->library('session');

		if(isset( $_POST['email']) && isset($_POST['password'])){
			$email = $_POST['email'];
			$pass = $_POST['password'];

			if(empty($email))
				$warnning = "You missed your email!";
			else if(empty($pass))
				$warnning = "You missed your password!";

			if(isset($warnning)) {
				echo "<script type=\"text/javascript\">alert(\"$warnning\");</script>";
				header('Refresh:0;');
				return false;
			}

			$sql_query = $this->db->query("SELECT user_id FROM user WHERE email='"
			 . $email
			 . "' AND password='"
			 . $pass
			 . "'");
			if($sql_query->num_rows()) {
				echo "!!!!!!!!!!!!!!!".$sql_query->result()[0]->user_id;
				$this->session->set_userdata('uid', $sql_query->result()[0]->user_id);
				$this->session->set_userdata('email', $email);
				header('Refresh:0;');
			} else
				echo '<script type="text/javascript">alert("Wrong email or password");</script>';
		}
		if(isset($_POST['btnlogout'])){
				$this->session->unset_userdata('uid');
				$this->session->unset_userdata('email');
		}

		$sql_string = 'SELECT *
									FROM tag
									ORDER BY tag_id';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_categories"] = $sql_query;

		$sql_string = 'SELECT *
									FROM session
									WHERE available_ticket_num =
									(
										SELECT MAX(available_ticket_num)
										FROM session
									)
									LIMIT 1';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_featuring"] = $sql_query;

		$sql_string = 'SELECT * FROM session WHERE recommended = 1';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_recommend"] = $sql_query;

		$sql_string = 'SELECT * FROM tag';
		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
		$sql_query = $this->db->query($sql_string);
		$data["query_tag"] = $sql_query;

		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('BookingSystem_index', $data);
		$this->load->view('footer', $data);
	}

  public function session() {
		$this->load->library('session');
		$uid = $this->session->userdata('uid');

		$data["pageTitle"] = "Booking System";
		$data["includecss"] = "BookingSystem_session";
		$data["includejs"] = "BookingSystem_session";
		$data["session_id"] = $this->uri->segment(3);
		$data["joinLogined"] = 0; // Not in join page
		$this->load->database();
		if($this->uri->segment(4) == "join") {
			if(!empty($uid)) {
					$booking_num = "bk" . str_pad(($this->db->query("SELECT MAX(CAST(TRIM(LEADING '0' FROM (TRIM(LEADING 'bk' FROM booking_number))) AS UNSIGNED)) AS max FROM session_user")->result()[0]->max + 1), 5, "0", STR_PAD_LEFT);
					$sql_query = $this->db->query("SELECT booking_number FROM session_user WHERE session_id=" . $data["session_id"] . " AND user_id=" . $uid);
					// echo "SELECT * FROM session_user WHERE session_id=" . $data["session_id"] . " AND user_id=" . $uid . "<br>";
					// echo ($sql_query? 1:0) . "," . (isset($sql_query->result()[0])? 1:0);
					// echo $booking_num;
					if($sql_query != NULL && isset($sql_query->result()[0])) {
						$data["booking_num"] = $sql_query->result()[0]->booking_number;
						$data["joinLogined"] = -2; // Already joined activity
					} else if($this->db->query("INSERT INTO session_user(session_id, user_id, booking_number) VALUES (" . $data["session_id"] . "," . $uid . ", '$booking_num')") == NULL) {
						$data["joinLogined"] = -3; // Database query error
					} else {
						$data["booking_num"] = $booking_num;
						$data["joinLogined"] = 1; // Success
					}
			} else {
				$data["joinLogined"] = -1; // No account found/No login
			}
		} else if($data["session_id"] != "") {
		    $sql_query = $this->db->query(
						"SELECT s.session_title, s.description_l, s.time, s.format, s.level, v.city, s.price, s.session_type, s.session_theme_photo, v.venue_name, "
					. "s.available_ticket_num-(SELECT COUNT(*) FROM session_user WHERE session_id=1) AS remaining_ticket_num "
					. "FROM session s "
					. "NATURAL JOIN session_venue sv "
					. "NATURAL JOIN venue v "
					. "WHERE s.session_id='"
					. $data["session_id"]
					. "' ");
				$data["query_session"] = $sql_query;

				$sql_query = $this->db->query(
						"SELECT t.trainer_id, t.trainer_name, t.trainer_description "
					. "FROM trainer t "
					. "NATURAL JOIN session_trainer st "
					. "WHERE st.session_id=" . $data["session_id"]);
				$data["query_trainers"] = $sql_query;

				$sql_query = $this->db->query(
						"SELECT o.organizer_id, o.organizer_name, o.organizer_description "
					. "FROM organizer o "
					. "NATURAL JOIN session_organizer so "
					. "WHERE so.session_id=" . $data["session_id"]);
				$data["query_organizers"] = $sql_query;

				$sql_query = $this->db->query(
						"SELECT t.tag_id, t.tag_name "
					. "FROM tag t "
					. "NATURAL JOIN session_tag st "
					. "WHERE st.session_id=" . $data["session_id"]);
				$data["query_tags"] = $sql_query;

				$sql_query = $this->db->query(
						"SELECT s.session_id, s.session_title, s.description_s, s.session_theme_photo "
					. "FROM session_tag st1 "
					. "NATURAL JOIN session s "
					. "NATURAL JOIN tag t "
					. "WHERE st1.tag_id IN (SELECT t.tag_id "
					. "	FROM tag t "
					. "	NATURAL JOIN session_tag st "
					. "	WHERE st.session_id=" . $data["session_id"] . ") "
					. "AND st1.session_id!=" . $data["session_id"] . " "
					. "GROUP BY s.session_id");
				$data["query_related_sessions"] = $sql_query;
		}

		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('BookingSystem_session', $data);
		$this->load->view('footer', $data);
  }

	public function register() {
		$this->load->library('session');
			if(isset($_POST["submit"])){
				$first_name = $_POST['first'];
				$last_name = $_POST['last'];
				$pass = $_POST['pass'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$this->load->database();

			  if($first_name == "")
					$warning = "You missed your first name!";
			  else if($last_name == "")
					$warning = "You missed your last name!";
			  else if($email == "")
					$warning = "You missed your email!";
			  else if($mobile == "")
					$warning = "You missed your mobile number!";
			  else if($pass == "")
					$warning = "You missed your password!";

				$sql_query = $this->db->query("SELECT user_id FROM user WHERE email='$email'");
				if($sql_query != NULL && isset($sql_query->result()[0]))
					$warning = "Your email is already registered!";

				if(isset($warning)) {
					echo "<script type=\"text/javascript\">alert(\"$warning\");</script>";
					header("Refresh: 0;");
					return false;
				}

				$sql_query = $this->db->query('INSERT INTO user(password, first_name, last_name, email, mobile_number) VALUES(\''
					. $pass
					. "', '"
					. $first_name
					. "', '"
					. $last_name
					. "', '"
					. $email
					. "', '"
					. $mobile
					. "')");
				echo '<script type="text/javascript">alert("Registration Succeed!");</script>';
				header("Refresh: 0; url = /CodeIgniter/index.php/BookingSystem");
			}
			$data["pageTitle"] = "Booking System";
			$this->load->view('header', $data);
			$this->load->view('navigation', $data);
			$this->load->view('BookingSystem_register', $data);
			$this->load->view('footer', $data);
		}

	public function listing() {
		$this->load->library('session');
		$this->load->database();
		$column = $_GET['type'];
		$data["pageTitle"] = $column." Page";

		$sql_string = 'SELECT * FROM '
			.$column
			.' ORDER by '
			.$column
			.'_name';
		$sql_query = $this->db->query($sql_string);
		$data["query_listing"] = $sql_query;
		$data["column"] = $column;

		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('BookingSystem_listing', $data);
		$this->load->view('footer', $data);
	}

	public function search() {
		$this->load->library('session');
	$data["pageTitle"] = "Search Page";

	$this->load->database();
	 $column2 = $_GET['search_param'];
	 $content2 = $_GET['x'];

		switch ($column2) {
			case 'session': $sql_string = 'SELECT *  FROM `session` WHERE session_title LIKE "%'
																	. $content2
																	. '%" ORDER by time';
																	break;

			case 'format': $sql_string = 'SELECT *  FROM `session` WHERE format LIKE "%'
																	.$content2
																	.'%" ORDER by time';
																	break;

			case 'level': $sql_string = 'SELECT *  FROM `session` WHERE level LIKE "%'
																	.$content2
																	.'%" ORDER by time';
																	break;

			case 'tag': $sql_string =	'SELECT DISTINCT s.*
																FROM session s
																NATURAL JOIN session_tag st
																NATURAL JOIN tag t
																WHERE t.tag_name LIKE "%'
																.$content2
																.'%" ORDER by time';
																break;

			case 'organizer': $sql_string = 'SELECT s.*
																			FROM session s
																			NATURAL JOIN session_organizer so
																			NATURAL JOIN organizer o
																			WHERE o.organizer_name LIKE "%'
																			.$content2
																			.'%" ORDER by time';
																			break;

			case 'trainer': $sql_string =	'SELECT s.*
																		FROM session s
																		NATURAL JOIN session_trainer st
																		NATURAL JOIN trainer t
																		WHERE t.trainer_name LIKE "%'
																		.$content2
																		.'%" ORDER by time';
																		break;

			case 'venue': $sql_string =	'SELECT s.*
																	FROM session s
																	NATURAL JOIN session_venue sv
																	NATURAL JOIN venue v
																	WHERE v.venue_name LIKE "%'
																	.$content2
																	.'%" ORDER by time';
																	break;

			case 'city': $sql_string =	'SELECT s.*
																	FROM session s
																	NATURAL JOIN session_venue sv
																	NATURAL JOIN venue v
																	WHERE v.city LIKE "%'
																	. $content2
																	. '%" ORDER by time';
																	break;

			case 'description': $sql_string =	'SELECT *
																				FROM `session`
																				WHERE description_l LIKE "%'
																				. $content2
																				. '%" ORDER by time';
																				break;

			case 'all': $sql_string =	"SELECT DISTINCT s.*
																FROM session s
																NATURAL JOIN session_venue sv
																NATURAL JOIN venue v
																NATURAL JOIN session_trainer st
																NATURAL JOIN trainer t
																NATURAL JOIN session_organizer so
																NATURAL JOIN organizer o
																NATURAL JOIN session_tag stag
																NATURAL JOIN tag
																WHERE CONCAT(s.session_title,v.venue_name,t.trainer_name,o.organizer_name,tag.tag_name)
																LIKE '%$content2%' ORDER by time";
																break;
		}
		$sql_query = $this->db->query($sql_string);

		$data["query_search"] = $sql_query;
		$data["column2"] = $column2;
		$data["content2"] = $content2;

		$this->load->view('header', $data);
		$this->load->view('navigation', $data);
		$this->load->view('BookingSystem_search', $data);
		$this->load->view('footer', $data);
	}
}
