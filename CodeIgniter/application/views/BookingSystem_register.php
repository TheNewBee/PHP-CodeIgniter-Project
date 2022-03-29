<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>ISD Society - ACCOUNT REGISTRATION FORM</title>

  <script>
  window.console = window.console || function(t) {};
  </script>

  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
  </script>

<style>
/*sass variables used*/
/*site container*/
.wrapper {
  width: 420px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  padding: 30px 0px 0px 0px;
  font: 25px Oswald;
  color: #FFF;
  text-transform: uppercase;
  text-shadow: #000 0px 1px 10px;
  margin: 0px;
}

p {
  font: 13px Open Sans;
  color: #6E6E6E;
  text-shadow: #000 1px 0px 0px;
  margin-bottom: 30px;
}

.form {
  width: 100%;
}

input[type="text"], input[type="password"], input[type="email"] {
  width: 98%;
  padding: 15px 0px 15px 8px;
  border-radius: 5px;
  box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.2);
  outline: none;
  border: none;
  border: 1px solid black;
  margin-bottom: 10px;
  color: #6E6E6E;
  text-shadow: #000 1px 0px 0px;
}

input[type="submit"] {
  width: 100%;
  padding: 15px;
  border-radius: 5px;
  outline: none;
  border: none;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font: 14px Oswald;
  color: #FFF;
  text-transform: uppercase;
  text-shadow: #000 0px 1px 5px;
  border: 1px solid #000;
  opacity: 0.7;
  -webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  border-top: 1px solid rgba(255, 255, 255, 0.8) !important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255, 255, 255, 0.2)));
}

input:focus {
  box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.7), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.3);
  -webkit-transition: 1s ease;
  -moz-transition: 1s ease;
  -o-transition: 1s ease;
  -ms-transition: 1s ease;
  transition: 1s ease;
}

input[type="submit"]:hover {
  opacity: 1;
  cursor: pointer;
}

.firstname-help,.lastname-help,.email-help,.mobile-help, .password-help {
  display:none;
  padding:0px;
  margin:0px 0px 15px 0px;
}

.optimize {
  position: fixed;
  right: 3%;
  top: 0px;
}

</style>

</head>

<body translate="no" >

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <h1>Register For An Account</h1>
  <p>To sign-up for a free basic account please provide us with some basic information using
  the contact form below. Please use valid credentials.</p>
  <form class="form" method="post" action="">
    <input type="text" class="firstname" name="first" placeholder="FirstName">
    <div>
      <p class="firstname-help">Please enter your first name.</p>
    </div>
    <input type="text" class="lastname" name="last"placeholder="LastName">
    <div>
      <p class="lastname-help">Please enter your last name.</p>
    </div>
    <input type="email" class="email" name="email"placeholder="Email">
     <div>
      <p class="email-help">This will be your email to login.</p>
    </div>
    <input type="password" class="password" name="pass" placeholder="Password">
    <div>
      <p class="password-help">This will be your password to login.</p>
    </div>
    <input type="text" class="mobile" name="mobile" placeholder="Mobile">
    <div>
      <p class="mobile-help">Please enter your mobile number.</p>
    </div>
    <input type="submit" class="submit" name="submit" value="Register" >
  </form>
</div>
    <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
  $(".firstname").focus(function(){
    $(".firstname-help").slideDown(500);
  }).blur(function(){
    $(".firstname-help").slideUp(500);
  });

  $(".lastname").focus(function(){
    $(".lastname-help").slideDown(500);
  }).blur(function(){
    $(".lastname-help").slideUp(500);
  });
    $(".email").focus(function(){
      $(".email-help").slideDown(500);
    }).blur(function(){
      $(".email-help").slideUp(500);
  });
      $(".password").focus(function(){
        $(".password-help").slideDown(500);
      }).blur(function(){
        $(".password-help").slideUp(500);
  });
        $(".mobile").focus(function(){
          $(".mobile-help").slideDown(500);
        }).blur(function(){
          $(".mobile-help").slideUp(500);
  });
</script>

</body>
</html>
