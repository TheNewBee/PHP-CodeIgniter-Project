<nav class="navbar navbar-inverse navbar-fixed-top ">

<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="" href="/CodeIgniter/index.php"><img src="/CodeIgniter/images/logo_font.png" alt="Main page" width="120" ></a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">

		<form method="GET" action="/CodeIgniter/index.php/BookingSystem/listing">

		<ul class="nav navbar-nav">
			<li class=""><a href="/CodeIgniter/index.php">Home</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Training Mode
						 <span class="caret"></span></a>
					   <ul class="dropdown-menu">
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=format&x=Personal">Personal</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=format&x=Group">Group</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Session Level
						 <span class="caret"></span></a>
					   <ul class="dropdown-menu">
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=level&x=Let">Let me try</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=level&x=Beginner">Beginner</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=level&x=Intermediate">Intermediate</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=level&x=Advanced">Advanced</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Cities
						 <span class="caret"></span></a>
						 <ul class="dropdown-menu">
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=city&x=Hong Kong">Hong Kong</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=city&x=Kowloon">Kowloon</a></li>
							<li><a href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=city&x=Territories">New Territories</a></li>
						</ul>
					</li>

					<li class=""><a href="/CodeIgniter/index.php/BookingSystem/listing/listing?type=organizer">Organizers</a></li>
					<li class=""><a href="/CodeIgniter/index.php/BookingSystem/listing/listing?type=trainer">Trainer</a></li>
		</ul>

</form>


	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown"><?php
	if($this->session->userdata('email') != null) {
		$email = $this->session->userdata('email');
	$content = <<<END
	      <form action="/CodeIgniter/index.php/BookingSystem/index/" method="post">
	        <table>
	          <tr>
	        <th><p style="color:#9d9d9d; padding-top: 23px;
	        padding-bottom: 15px;">$email</p></th>
	        <th>&nbsp; &nbsp;    </th>
	  <th><button type="submit" name="btnlogout" id="btnlogout" class="btn-link">Sign Out</button></th>
	          </tr>
	        </table>
	      </form>
END;
	} else {
		$content = <<<END
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
				Sign In<span class="caret"></span>
			</a>
			<div class="dropdown-menu" id="formLogin" style="padding:15px; min-width:300px;">
				<div class="row">
					<div class="container-fluid">
						<form action="/CodeIgniter/index.php/BookingSystem/index/" method="POST">
							<div class="form-group">
								<label>email</label>
								<input class="form-control" name="email" id="email" placeholder="email@xxx.com" type="text">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" name="password" id="password" placeholder="***********" type="password"><br>
							</div>
							<input type="submit" id="btnLogin" class="btn btn-success btn-sm" value="Login"></input>
						</form>
					</div>
				</div>
			</div>
		</li>

		<li><a href="/CodeIgniter/index.php/BookingSystem/register">Register</a></li>

<!-- /search_bar -->
END;
	}
	echo $content;
	?>
	</ul>


	</div><!--/.navbar-collapse -->
</div>



			<!-- search bar -->
									<div class="col-xs-8 col-xs-offset-2">
											<form method="GET" action="/CodeIgniter/index.php/BookingSystem/search" class="input-group" style=" margin-bottom:10px;">
													<div class="input-group-btn search-panel" >
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<span id="search_concept">Search by</span> <span class="caret"></span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#session">Session</a></li>
																<li><a href="#tag">Tag</a></li>
																<li><a href="#organizer">Organizer</a></li>
																<li><a href="#trainer">Trainer</a></li>
																<li><a href="#venue">Venue</a></li>
																<li><a href="#description">Description</a></li>
																<li class="divider"></li>
																<li><a href="#all">Anything</a></li>
															</ul>
													</div>
													<input type="hidden" name="search_param" value="all" id="search_param">
													<input type="text" class="form-control" name="x" placeholder="Search term..."  >
													<span class="input-group-btn">
															<button class="btn btn-default" type="submit"  ><span class="glyphicon glyphicon-search"></span></button>
													</span>
											</form>
									 </div>
			<!-- search bar -->
</nav>
<br><br>
<!-- search_bar -->

<!-- /search_bar -->
