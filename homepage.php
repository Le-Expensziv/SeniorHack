<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" href="logoPolygon.png" type="image">
  <meta name="viewport" content="width=device-width, intial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/SeniorHack.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>SeniorHack</title>

<style>
  html ,body{
    width:100%;
    margin:0;
    padding:0;
    background-color:;
  }

  .container-fluid{
    margin-right:0;
    padding:0;
    overflow-x:hidden;
  }

  .view{
    height:100%;
    opacity:0.8;
  }

  .the-form{
    background-color:silver;
    padding:20px 20px 20px 20px;
    border-radius:15px;
  }

  #loginbtn a{
    text-decoration:none;
    color:white;
  }

  #registerbtn a{
    text-decoration:none;
    color:white;
  }

  hr.style-two {
      border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
  }

  .overall-grid{
    height:100%;
    width:100%;
    position:fixed;
    overflow-x:hidden;
    margin: 0;
    padding: 0;
    max-width:2000px;}

  #footer-bg {
  	background-color: #d7c9aa;
  	margin-top: 2%;
  	background-size:cover;
  	height:100%;
  	width:100%;
  	font-size: 15px;
    bottom:0;}

  .footer_mid {
  	text-align:center;
  	margin-top:4%;}

  .footer-left {
  	margin-top:4%;
  	text-align:left;
  	margin-left:10%;}

  .footer-right {
    margin-top:3%;
  	float: right;
  	text-align:right;
  	margin-right:10%;}

  @media (max-width: 1000px) {
	.footer-left{
	text-align:center;
     margin-right:10%;
	  }}
	@media (max-width: 1000px) {
	.footer-right{
	text-align:center;
	float:left;
     margin-left:30%;
		}}
  @font-face {
    font-family: "uni_sans_thin";
    src: url("Assignment/fonts/uni_sans_thin.eot");
    src:
    url("Assignment/fonts/uni_sans_thin.woff") format("woff"),
    url("Assignment/fonts/uni_sans_thin.otf") format("opentype"),
    url("Assignment/fonts/uni_sans_thin.svg#filename") format("svg");
  }

  @media (max-width: 991px) {

    .container-fluid{
      margin:0;
      padding:0;
    }

    .view {
      width: 100%;
      height: 400px;
      background-image: url('img/banner1.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      position: absolute;
      z-index: -1;
    }
    .something img{
      margin: 30px 0 0 30px;
    }

    .something h3{
      text-align:left;
      margin-top:140px;
      margin-left:30px;
      margin-bottom: 0;
      font-size: 50px;
      font-style:"Georgia", sans-serif;
    }

    .something p{
      text-align:left;
      margin-left:30px;
      color:white;
    }

    .something h3, p{
      color:white;
    }

    .something input{
      text-align:center;
      border:2px solid red;
      width:200px;
      background-color:red;
      float:left;
      margin-left:30px;
    }

    /*Css for intro to seniorhack*/
    .intro{
      margin-top:150px;
      margin-left:50px;
      max-width:950;
      margin-right: 50px;

    }

    .text p{text-align: justify;
    color:black;
    max-width:950px;
    }

    .the-form{
      margin-left:10px;
      max-width: 500px;
      text-align:left;
    }

    /*CSS for why choose seniorHack*/
    .why{
      margin-left:30px;
      margin-right:30px;
      margin-top:100px;
      position:relative;
      width:90%;
      text-align:center;
      font-family:"uni sans thin",Arial,sans-serif;
      color: black;
      max-width:800px;
    }
    .text1 h3, p{
      text-align:center;
      font-family:"uni sans thin",sans-serif;
      color: black;
    }
    .row{
      text-align:center;
      display:"inline-block"
      max-width:500px;
    }

  }
  @media (min-width: 992px) and (max-width: 1170px) {
    .container-fluid{
      margin:0;
      padding:0;
    }

    .view {
      width: 100%;
      height: 300px;
      background-image: url('banner1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      position: absolute;
      z-index: -1;
    }

    .something img{
      margin: 50px 0 0 100px;
    }

    .something h3{
      text-align:right;
      margin-top:35px;
      margin-right:100px;
      margin-bottom: 0;
      font-size: 50px;
      font-style:"Georgia", sans-serif;
    }

    .something p{
      text-align:right;
      margin-right:100px;
      color:white;
    }

    .something h3, p{
      color:white;
    }

    .something input{
      text-align:center;
      border:2px solid red;
      width:200px;
      background-color:red;
      float:right;
      margin-right:100px;
    }

    /*Css for intro to seniorhack*/
    .intro{
      margin-top:150px;
      margin-left:70px;
    }

    .text p{text-align: justify;
    color:black;
    max-width:550px;
    margin-right:0;
    padding-right:0;
    }

    .the-form{
      margin-left:10px;
      max-width: 500px;
      text-align:left;
      margin-right:50px;
    }

    /*CSS for why choose seniorHack*/
    .why{
      margin-left:60px;
      margin-top:100px;
      position:relative;
      width:90%;
      text-align:center;
      font-family:"uni sans thin",Arial,sans-serif;
      color: black;

    }
    .text1 h3, p{
      text-align:center;
      font-family:"uni sans thin",sans-serif;
      color: black;
    }
    .row{
      text-align:center;
      display:"inline-block"
    }

  }
  @media(min-width: 1170px){


    .container-fluid{
      margin:0;
      padding:0;
    }

    .view {
      width: 100%;
      height: 500px;
      background-image: url(img/banner1.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      position: absolute;
      z-index: -1;
    }

    .something img{
      margin: 50px 0 0 100px;
    }

    .something h3{
      text-align:right;
      margin-top:170px;
      margin-right:100px;
      margin-bottom: 0;
      font-size: 90px;
      font-style:"Georgia", sans-serif;
    }

    .something p{
      text-align:right;
      margin-right:100px;
      font-size:18px;
      color:white;
    }

    .something h3, p{
      color:white;
    }

    .something input{
      text-align:center;
      border:2px solid red;
      width:200px;
      background-color:red;
      float:right;
      margin-right:100px;
    }

    /*Css for intro to seniorhack*/
    .intro{
      margin-top:150px;
      margin-left:70px;
    }

    .text p{text-align:justify;}

    .the-form{
      margin-left:70px;
      margin-right:50px;
      text-align:left;
    }

    /*CSS for why choose seniorHack*/
    .why{
      margin-left:60px;
      margin-top:70px;
      position:relative;
      width:90%;
      text-align:center;
      font-family:"uni sans thin",Arial,sans-serif;
      color: black;
    }
    .text1 h3, p{
      text-align:center;
      font-family:"uni sans thin",sans-serif;
      color: black;
    }
    .row{
      text-align:center;
      display:"inline-block"
    }
  }
</style>
</head>
<body>
  <div class="container-fluid">
      <div class="view"></div>
      <div class="something">

          <a href="#"><img src="img/logoSquare.png" height="120px" width="120px" alt="Home"></a>

          <h3>Senior Hack</h3>
          <p>Bringing convenience and comfort to your doorstep</p>
        </div>

        <!--Introduction to Seniorhack-->
        <div class="intro">
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-7">
            <div class="text">
              <p style="font-size:35px;">Our background</p>
              <p>Aging comes with many challenges, loss of independence is just part of the process.
                Paying for doctor visits, grocery shopping, or even running small errands like cleaning the house may
                turn out to be difficult for senior citizens. They may even need daily assistance or homecare
                providers to help them with daily tasks like meal preparation. Furthermore, finding good help can
                be a challenge, and help does not always come free.<br><br>

                Hence, we developed a system to allow individual volunteers or non profit
                organizations to provide home care services to the elderly. The seniors will be
                able to find drivers, or other homecare providers for light household cleaning,
                meal preparation or even simple companionship via our SeniorHack</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="the-form">
              <form action="Login.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="name" class="form-control" aria-describedby="emailHelp"  name="login-username" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"   name="login-password" required>
                </div>
                <input type="submit" class="btn btn-primary" id="loginbtn" value="Login">
                <button  class="btn btn-danger" id="registerbtn"><a href="SignUp.php">Register</a></button>
              </form>
            </div>
          </div>
        </div>
        </div>

        <!--Why choose seniorhack-->
        <div class="why">
          <div class="text1">
            <hr class="style-two">
            <br>
            <h1>Why Choose SeniorHack</h1>
          </div>
          <div class="row" >
            <div class="col-xs-12 col-sm-6 col-md-4" >
              <h3>Convenient</h3>
              <p>SeniorHack brings your services right to your doorstep, without needing
              you to step out of your home at all.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3>Time-Saving</h3>
              <p>From booking home cleaning services to ordering your food, you can get it
                all with SeniorHack from the comfort of your home.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3>Top-class Services</h3>
              <p>To ensure that you get top of the line services, you are entitled to the best
                of servicers based on reviews given by our client base.
            </div>
          </div>
        </div>
      </div>




    <footer id="footer-bg" class="footer">
      <div class="container-fluid">
      <div class="row">

        <!--Contact No-->
        <div class="col-sm-4 pull-left1">
          <p class="footer-left" style="text-indent:10px">Contact Us At <br><span style="font-size:18px;font-weight:bold;"> 1300-88-2525</span></p>
        </div>

        <div class="col-sm-4 dropup">
          <p class="footer_mid">&copy;Copyright SeniorHack 2018 <br>All rights reserved</p>
        </div>

        <!--Links to Social Media-->
        <div class="col-sm-4">
          <ul class="social-network social-circle footer-right ">
  	         <a style="color:black">Join Us At </a> <br>
             <a href="https://facebook.com/"><i class="fa fa-facebook-square" style="font-size:2em;color:black;margin-right:18%"></i></a>
  		       <a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:2em;color:black"></i></a>
           </ul>
         </div>
       </div>
     </div>
   </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/bootstrap/min.js"></script>
  </body>
</html>
