<br><br>


<div class="container">

  <?php

  echo
  '<hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"> '
    .$query_search->num_rows()
    .'</strong> results  found for <strong class="text-danger">'
     .$content2
    .'</strong> by <strong class="text-danger">'
    . $column2
    .'</strong></h2>
	</hgroup>
    <section class="col-xs-12 col-sm-6 col-md-12">';




// $a =  mysqli_num_rows($query_search->result());
// echo $a;

foreach ($query_search->result() as $row)
			{


// echo data("Y-M-d", $row->session_theme_photo->time);
		echo '<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">';

				echo '<a href="/CodeIgniter/index.php/BookingSystem/session/'
        . $row->session_id
        .'" title="Lorem ipsum" class="thumbnail"><img style="height:165px;" src="'
				.$row->session_theme_photo
				.'" alt="" /></a>';

			echo	'</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search" style="list-style-type:none">';

				echo	'<li><i class="glyphicon glyphicon-calendar"></i> <span>'
				.date("d-M-Y", $row->time)
				.'</span></li>';

				echo '<li><i class="glyphicon glyphicon-time"></i> <span>'
				.date("H:i", $row->time)
				.'</span></li>';

        echo '<li><i class="glyphicon glyphicon-user"></i> <span>'
        .$row->format
        .'</span></li>';

        echo '<li><i class="glyphicon glyphicon-usd"></i> <span>'
        .$row->price
        .'</span></li>';


        $sql_string2 = "SELECT t.tag_name
											FROM tag t
											NATURAL JOIN session_tag st
											NATURAL JOIN session s
											WHERE st.session_id = $row->session_id
                      limit 2";




        $sql_query2 = $this->db->query($sql_string2);
        foreach ($sql_query2->result() as $row2){
  				 echo	'<li><i class="glyphicon glyphicon-tags"></i> <span>'
  				 .$row2->tag_name
  				 .'</span></li>';
       }

				echo '</ul>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 excerpet">';

				echo '<h3><a href="/CodeIgniter/index.php/BookingSystem/session/'
							. $row->session_id
							.'" title="">'
							.$row->session_title
							. '</a> - Level: '
              .$row->level
              .'</h3>';


      $sql_string = "SELECT t.trainer_name
										FROM trainer t
										NATURAL JOIN session_trainer st
										NATURAL JOIN session s
										WHERE st.session_id = $row->session_id
                    limit 1";
        $sql_query = $this->db->query($sql_string);
        $row2 = $sql_query->result()[0];

				echo '<p>'
				. $row->description_s
				.'<br><br>Trainer: '
        . $row2->trainer_name
        .'</p>';

				echo '<span class="plus"><a href="/CodeIgniter/index.php/BookingSystem/session/'
				. $row->session_id
				.'/join/" title=""><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>';

	}
?>




	</section>
</div>
