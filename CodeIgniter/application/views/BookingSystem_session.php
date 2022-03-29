<?php
	if($joinLogined != 0) {
		if($joinLogined == 1)
			exit("<script>alert(\"Join session SUCCEEDED! Your booking number is $booking_num.\"); location.href=\"/CodeIgniter/index.php/BookingSystem/session/$session_id/\";</script>");
		else if($joinLogined == -1)
			exit("<script>alert(\"Please LOGIN first!\"); location.href=\"/CodeIgniter/index.php/BookingSystem/session/$session_id/\";</script>");
		else if($joinLogined == -2)
			exit("<script>alert(\"You ALREADY joined this session! Your booking number is $booking_num.\"); location.href=\"/CodeIgniter/index.php/BookingSystem/session/$session_id/\";</script>");
		else
			exit();
	}
	if(!isset($query_session) || $query_session == NULL || !isset($query_session->result()[0])) {
		exit('Sorry, session not found!');
	}
	$row = $query_session->result()[0];
	$session_title = $row->session_title;
	$description_l = $row->description_l;
	$time = $row->time;
	$format = $row->format;
	$level = $row->level;
	$city = $row->city;
	$price = $row->price;
	$session_type = $row->session_type;
	$session_theme_photo = $row->session_theme_photo;
	$venue_name = $row->venue_name;
	$remaining_ticket_num = $row->remaining_ticket_num;
	//$recommended = true;
?>
<br><br>
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="vertical-align:middle;max-width:100%;" src="<?php echo $session_theme_photo; ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?php echo /*($recommended? "[RECOMMENDED] ":"") . */$session_title; ?></h3>
                    <h5 style="color:#337ab7">Type: <?php echo $session_type; ?> · Level: <?php echo $level; ?></h5>

                    <!-- Precios -->
                    <h6 class="title-price"><small><img src="/CodeIgniter/images/vector/group.svg" alt="group" style="height: 12px; width: 12px;"> <?php echo $format; ?></small></h6>
                    <h4 style="margin-top:10px;"><img src="/CodeIgniter/images/vector/calendar.svg" alt="date" style="height: 14px; width: 14px;"> <?php echo date('Y-m-d H:i:s', $time); ?></h4>
                    <h3 style="margin-top:0px;"><img src="/CodeIgniter/images/vector/coin.svg" alt="price" style="height: 20px; width: 20px;"> <?php echo ($price == 0? "FREE":$price); ?></h3>

                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>CITY</small></h6>
                        <div>
                            <div class="attr active"><?php echo $city; ?></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>VENUE</small></h6>
                        <div>
                            <div class="attr2 active"><?php echo $venue_name; ?><br></div>
                        </div>
                    </div>

                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <!-- <button class="btn btn-success">JOIN SESSION NOW!</button> -->
												<?php echo ($remaining_ticket_num > 0? "<button class=\"btn btn-success\" onClick=\"if(confirm('Are you sure to join $session_title?')) location.href='/CodeIgniter/index.php/BookingSystem/session/$session_id/join/';

\">JOIN SESSION NOW!</button>":"<button class=\"btn btn-danger\" disabled=\"disabled\">FULL!</button>"); ?>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span>Add to wishing list</a></h6>
                    </div>
                </div>

                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active" onclick="openTab(event, 'description')">Description</li>
                        <li onclick="openTab(event, 'trainer')">Trainer</li>
                        <li onclick="openTab(event, 'organizer')">Organizer</li>
                        <li onclick="openTab(event, 'tag')">Tags</li>
                    </ul>
										<div class="content">
	                    <div id="description" name="menu-content" style="width:100%;border-top:1px solid silver">
	                        <p style="padding:15px;">
	                            <small><?php echo $description_l; ?></small>
	                        </p>
	                    </div>
	                    <div id="trainer" name="menu-content" style="width:100%;border-top:1px solid silver;display:none">
	                        <p style="padding:15px;">
	                            <small><?php
																		foreach ($query_trainers->result() as $row) {
																			$content = <<< END
																				<div class="col-sm-6 col-md-3">
																					<div class="panel panel-default panel-card">
																							<div class="panel-body text-center">
																									<h4 class="panel-header"><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=trainer&x=$row->trainer_name">$row->trainer_name</a></h4>
																									<small>$row->trainer_description</small>
																							</div>
																					</div>
																				</div>
END;
																			echo $content;
																		}
																	?>
															</small>
	                        </p>
	                    </div>
	                    <div id="organizer" name="menu-content" style="width:100%;border-top:1px solid silver;display:none">
	                        <p style="padding:15px;">
	                            <small><?php
																		foreach ($query_organizers->result() as $row) {
																			$content = <<< END
																				<div class="col-sm-6 col-md-3">
																					<div class="panel panel-default panel-card">
																							<div class="panel-body text-center">
																									<h4 class="panel-header"><a href="/CodeIgniter/index.php/BookingSystem/session/$row->organizer_id/">$row->organizer_name</a></h4>
																									<small>$row->organizer_description</small>
																							</div>
																					</div>
																				</div>
END;
																			echo $content;
																		}
																	?>
															</small>
	                        </p>
	                    </div>
	                    <div id="tag" name="menu-content" style="width:100%;border-top:1px solid silver;display:none">
	                        <p style="padding:15px;">
	                            <small>Tags: <?php
																	foreach ($query_tags->result() as $row) {
																		echo "<a href=\"/CodeIgniter/index.php/BookingSystem/search/search?search_param=tag&x=" . $row->tag_name . "\">" . $row->tag_name . "</a>\n";
																	}
																?><br><br><br><br>

																Related Session (All sessions from upper tags):
																<section id="t-cards">
															    <div class="container">
															        <div class="row"><?php
																					foreach ($query_related_sessions->result() as $row) {
																						$content = <<< END
																							<div class="col-sm-6 col-md-3">
																							  <div class="panel panel-default panel-card">
																							      <div class="panel-heading">
																							          <img src="$row->session_theme_photo" />
																												<button class="btn btn-primary btn-sm glyphicon glyphicon-plus" role="button" onClick="if(confirm('Are you sure to join $row->session_title?')) location.href='/CodeIgniter/index.php/BookingSystem/session/$row->session_id/join/';"></button>
																							      </div>
																							      <div class="panel-body text-center">
																							          <h4 class="panel-header"><a href="/CodeIgniter/index.php/BookingSystem/session/$row->session_id/">$row->session_title</a></h4>
																							          <small>$row->description_s</small>
																							      </div>
																								</div>
																							</div>
END;
																						echo $content;
																					}
																				?>

																	    </div>
																    </div>
																</section>
															</small>
	                        </p>
	                    </div>
										</div>
                </div>
            </div>
        </div>
    </body>
</html>
