<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Request.css">
  <link rel="stylesheet" href="css/SeniorHack.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 
 body{background-color:#f0f3f5;}

 .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color:white;
    background-color:#0B7A75;}

.nav_style {
	background-color:#0B7A75;
	border:none;}

 .topnav li a{
	text-align:center;
	color:white !important;
	padding-right: 35px;
	padding-left: 35px;}

.logo {
  margin-top:-1%;
  height:50px;}

.button.active {
	background-color:#7b2d26 !important;
	color:white;
	border: 2px solid white;}

@media only screen and (max-width: 750px)
  {.log-out { margin:auto;
  display:block;
  width:25%;
  }}

@media only screen and (min-width: 750px){
 .log-out {
  margin-right:2%;
  }}

.banner-title, .banner-description{
  text-align:center;}

#banner {
	background:url(img/signup-banner.png) no-repeat top center fixed;
	background-size:cover;
	height:400px;
	width:100%;}

.btn span.fa-check {
	opacity: 0;
}
.btn.active span.fa-check {
	opacity: 1;
}

#btn-logout {
	border-color:white;
	background-color: transparent;
	color:white;
}
</style>
</head>
<!-- Navigation bar-->
<header>
<div id="banner">
<nav class="navbar navbar-default nav_style navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav logo">
        <li><a href="#"><img src="img/logo.png" alt="SeniorHack Logo" class="logo"></a></li>
    </ul>
	<!--Sign In-->
   <div class="collapse navbar-collapse" id="cl-mainNavbar">
		<a href="homepage.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right log-out">Sign In</a>
	</div>
  </div>
</nav>
<!--Banner Title and Description-->
<div class="container">
<div class="row"><br><br><br>
<div class="banner-title col-lg-12"><p>Elevate The Lifestyle Of </p><p style="margin-top:-2%">Seniors In Our Nation</p></div>

<div class="banner-description col-lg-12 ">
<p>SeniorHack, the way Senior Care should be</p><br>
<a href="#senior_signup" class="btn btn-info" id="next" role="button">Create An Account</a></div>
</div>
</div>

</header>

<body>
<!--Sign Up Form-->
<body>

<div class="container"  style="margin-top:2%;text-align:center">
  <div class="row">
  
  
  <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
<h2>Sign Up</h2>
<br>
<!--New Request and View Requests Tabs-->
  <ul class="tab nav nav-pills">

    <li style="width:45%; padding-right: 5%" ><a class="btn btn-lg btn-default" id="defaultOpen" data-toggle="tab" href="#senior_signup">Senior</a></li>

    <li style="width:54%; padding-left: 3%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#sp_signup">Service Provider</a></li>

  </ul>
</div>
<br>
<!--End of Tabs-->
<!--Senior Sign Up-->

<div class="tab-content" id="open">
	 <div id="senior_signup" class="tab-pane fade in active ">
	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 shadow col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
<br>
<form action="SeniorSignUp.php" method="post" id="s_form">
<div id="open">
  <div class="form-group">
   <div class="form-group">
    <label for="UserName">Username</label>
    <input type="text" class="form-control" id="s_username" name="s_username">
  </div>

  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="s_pwd" name="s_password">
  </div>

  <div class="form-group">
    <label for="FullName">Full Name</label>
    <input type="text" class="form-control" id="s_name" name="s_name">
  </div>

  <div class="form-group">
    <label for="ContactNo">Contact No</label>
    <input type="text" class="form-control" id="s_contact" name="s_contact">
  </div>

  <div class="form-group">
    <label for="Address">Address</label>
	<textarea method="post" rows="3" cols="21" class="form-control" wrap="hard" id="s_address" name="s_address" form="s_form"></textarea>
  </div>


<br/>
<input type="submit" onclick="seniorValidation(this)" id="senior_submit" class="pull-right btn btn-block btn-success" style="margin-bottom:10%"> 
</form>

    </div>
</div>
</div>
</div>
</div>
<!--Service Provider Sign Up-->
<div id="sp_signup" class="tab-pane fade  ">
<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 shadow col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
<br>
<form action="SP_SignUp.php" method="post" id="sp_form">
<div id="open">
  <div class="form-group">
   <div class="form-group">
    <label for="UserName">Username</label>
    <input type="text" class="form-control" id="sp_username" name="sp_username" required>
  </div>

  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="sp_pwd" name="sp_password">
  </div>

  <div class="form-group">
    <label for="FullName">Full Name</label>
    <input type="text" class="form-control" id="sp_name" name="sp_name">
  </div>

  <div class="form-group">
    <label for="ContactNo">Contact No</label>
    <input type="text" class="form-control" id="sp_contact" name="sp_contact">
  </div>

  <div class="form-group">
    <label for="Address">Address</label>
	<textarea method="post" rows="3" cols="21" class="form-control" wrap="hard" id="sp_address" name="sp_address" form="sp_form"></textarea>
  </div>
  <label>Services to Provide</label>
  <br><br>
 <!--Checkboxes for Service Offered-->
 <div id="checkboxes">
 <div class="form-group" style="text-align:center">
	<div class="btn-group " data-toggle="buttons">
		<label class="btn btn-primary active ">
			<input type="checkbox" checked name="servicetype[]" value="Driver">Driver
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-primary" >
			<input type="checkbox" name="servicetype[]" value="Cleaning"> Cleaning
			<span class="fa fa-check"></span>
		</label>
	</div>
	</div>
	<br>
	<div class="form-group" style="text-align:center">
	<div class="btn-group " data-toggle="buttons">
		<label class="btn btn-primary">
			<input type="checkbox" name="servicetype[]" value="Companion"> Companion
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-primary" style="text-align:center">
			<input type="checkbox" name="servicetype[]" value="Meal Preparation"> Meal Preparation
			<span class="fa fa-check"></span>
		</label>
	</div>
 </div>
</div>
<br/>
<input type="submit" onclick="spValidation(this)" id="sp_submit" class="pull-right btn btn-block btn-success" style="margin-bottom:10%">


    </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!--End of Service Provider Sign Up-->
</div>
</div>
<!--Footer-->
<footer id="footer-bg" class="footer" style="width:100%">
<div class="container">
<div class="row">

<!--Contact No-->
  <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-4">
      <p class="footer-left" style="text-indent:10px">Contact Us At <br><span style="font-size:18px;font-weight:bold;"> 1300-88-2525</span></p>
      </div>

    <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 ">
      <p class="footer_mid">&copy;Copyright SeniorHack 2018 <br>All rights reserved</p>
    </div>

<!--Links to Social Media-->
    <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-1 ">
    <ul class="social-network social-circle footer-right ">
	<a style="color:black">Join Us At </a> <br>
       <a href="https://facebook.com/"><i class="fa fa-facebook-square" style="font-size:2em;color:black;margin-right:18%"></i></a>
		<a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:2em;color:black"></i></a>
     </ul>
  </div>
</div>
</div>
</footer>

<script>
<!--Senior Sign Up Tab is opened by default-->
document.getElementById("defaultOpen").click();

<!--show and scroll to sign up form upon click 'create an account' button-->
$("#next").on("click", function(){
	document.getElementById("open").scrollIntoView();
});

//validate senior sign up form
function seniorValidation() {
	//value of phone No is stored inside a var becasue it will be called several times
	var phoneNo = document.getElementById("s_contact");
	var pwd =document.getElementById("s_pwd");
	//values to be compared with a valid phone No
	var numbers =/^\d+(-\d+)*$/;
	if (document.getElementById("s_username").value=="") {
		alert("Username field cannot be empty.");
		document.getElementById("s_username").focus();
		event.preventDefault();
		return false;
	} //end if
	if(pwd.value=="") {
		alert("Password cannot be empty.");
		document.getElementById("s_pwd").focus();
		event.preventDefault();
		return false;
		}
	if(pwd.value.length < 6) {
		alert("Password must be 6 characters.");
		document.getElementById("s_pwd").focus();
		event.preventDefault();
		return false;
		}
		
	if(document.getElementById("s_name").value=="") {
		alert("Name field cannot be empty.");
		document.getElementById("s_name").focus();
		event.preventDefault();
		return false;
		}//end if
	if(phoneNo.value=="") {
		alert("Contact number cannot be empty.");
		document.getElementById("s_contact").focus();
		event.preventDefault();
		return false;
		}
	if(!phoneNo.value.match(numbers) || phoneNo.value.length < 10) {
		document.getElementById("s_contact").focus();
		alert("Invalid phone number.");
		event.preventDefault();
		return false;
		}
	if(document.getElementById("s_address").value=="") {
		alert("Address cannot be empty.");
		document.getElementById("s_address").focus();
		event.preventDefault();
		return false;
		}
		{
		return true;
		}
	}//end of function validateForm
	
	
//service provider sign up form validation	
function spValidation() {
	var checked = $('#checkboxes').find(':checked').length;
	var pwd =document.getElementById("sp_pwd");
	//value of phone No is stored inside a var becasue it will be called several times
	var phoneNo = document.getElementById("sp_contact");
	//values to be compared with a valid phone No
	var numbers =/^\d+(-\d+)*$/;
	if (document.getElementById("sp_username").value=="") {
		alert("Username field cannot be empty.");
		document.getElementById("sp_username").focus();
		event.preventDefault();
		return false;
	} //end if
	if(pwd.value=="") {
		alert("Password cannot be empty.");
		document.getElementById("sp_pwd").focus();
		event.preventDefault();
		return false;
		}
	if(pwd.value.length < 6) {
		alert("Password must be 6 characters.");
		document.getElementById("sp_pwd").focus();
		event.preventDefault();
		return false;
		}
		
	if(document.getElementById("sp_name").value=="") {
		alert("Name field cannot be empty.");
		document.getElementById("sp_name").focus();
		event.preventDefault();
		return false;
		}//end if
	if(phoneNo.value=="") {
		alert("Contact number cannot be empty.");
		document.getElementById("sp_contact").focus();
		event.preventDefault();
		return false;
		}
	if(!phoneNo.value.match(numbers) || phoneNo.value.length < 10) {
		document.getElementById("sp_contact").focus();
		alert("Invalid phone number.");
		event.preventDefault();
		return false;
		}
	if(document.getElementById("sp_address").value=="") {
		alert("Address cannot be empty.");
		document.getElementById("sp_address").focus();
		event.preventDefault();
		return false;
		}
	if (!checked){
		alert("Please select at least one service type to offer");
		event.preventDefault();
		return false;
		}//end if
		{
		return true;
		}
	}
</script>

</body>
</html>
