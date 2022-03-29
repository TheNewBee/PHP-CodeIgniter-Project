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
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					Sign In<span class="caret"></span>
				</a>
				<div class="dropdown-menu" id="formLogin" style="padding:15px; min-width:300px;">
					<div class="row">
						<div class="container-fluid">
							<form>
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" name="username" id="username" type="text" />
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" name="password" id="password" type="password" /><br>
								</div>
								<button type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</button>
							</form>
						</div>
					</div>
				</div>
			</li>
			<li><a href="#" data-toggle="modal" data-target='#modalRegister'>Register</a></li>
<!-- search_bar -->
			<li>
		    <div class="input-group" style="margin-top:7px; min-width:380px">
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
	                    <li class="divider"></li>
	                    <li><a href="#all">Anything</a></li>
	                  </ul>
	              </div>
	              <input type="hidden" name="search_param" value="all" id="search_param" />
	              <input type="text" class="form-control" name="x" placeholder="Search term..." />
	              <span class="input-group-btn">
	                  <button class="btn btn-default" type="button" onClick="location.href='BookingSystem_search.php'" ><span class="glyphicon glyphicon-search"></span></button>
	              </span>
	          </div>
					</li>
<!-- /search_bar -->
		</ul>
	</div><!--/.navbar-collapse -->
</div>
</nav>
