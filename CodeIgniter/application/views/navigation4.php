<!-- <nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="/CodeIgniter/images/logo_font.png" alt="Main page" width="80" height="24"></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
</nav> -->

<?php
	if($this->session->userdata('email') != null) {
		echo "<link rel=\"stylesheet\" href=\"/CodeIgniter/css/Signout.css\">";
	}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img src="/CodeIgniter/images/logo_font.png" alt="Main page" width="80" height="24"></a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li class=""><a href="#">Home</a></li>
			<li class=""><a href="#">Locations</a></li>
			<li class=""><a href="#">About</a></li>

		<!-- search_bar -->
<li>
			<div class="col-xs-8 col-xs-offset-2 ">
				<table>
					<tr>
						<div class="input-group" style="margin-top:7px">
										<div class="input-group-btn search-panel">
												<th style="text-align: right;"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span id="search_concept">Filter by</span> <span class="caret"></span>
											 </button>
											  <ul class="dropdown-menu" role="menu">
													<li><a href="#contains">Contains</a></li>
													<li><a href="#its_equal">It's equal</a></li>
													<li><a href="#greather_than">Greather than ></a></li>
													<li><a href="#less_than">Less than < </a></li>
													<li class="divider"></li>
													<li><a href="#all">Anything</a></li>
												</ul>
											</th>
										</div>
										<th style="text-align: right;"><input type="hidden" name="search_param" value="all" id="search_param">
											<input type="text" size="50" class="form-control" name="x" placeholder="Search term..."></th>
											<th><span class="input-group-btn">
												<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
										</span></th>
								</div>
							</tr>
							</table>
			</div>

</li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown"><?php
	if($this->session->userdata('email') != null) {
		$email = $this->session->userdata('email');
	$content = <<<END
	      <form action="" method="post">
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
						<form action="" method="POST">
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
</nav>
