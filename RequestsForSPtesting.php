<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "seniorhack";
$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$username = $_SESSION['username'];
//Fetching all records from ServiceRequest table that have pending status
$p_result = mysqli_query($con, "SELECT* FROM servicerequest WHERE status = 'pending'");

$p_row_count = mysqli_num_rows($p_result);

$u_sql = "SELECT* FROM servicerequest WHERE status = 'accepted'";
if ($u_result = $con->query($u_sql)) {
	$u_row_count = mysqli_num_rows($u_result);
	if ($u_row_count>0) {
		$i = 1;
		while($u_row=mysqli_fetch_assoc($u_result)) {
			$u_requestID[$i] = $u_row['requestID'];
			$date[$i] = strtotime($u_row['date']);
      $u_date[$i] = date("d/m/y", $date[$i]);
      $time[$i] = strtotime($u_row['time']);
      $u_time[$i] = date("H:ia", $time[$i]);
			$u_serviceCode[$i] = $u_row['serviceCode'];
			$u_sID[$i] = $u_row['sID'];
			$i++;
		}
	}
} else {
	$u_row_count = 0;
}
$h_sql = "SELECT* FROM servicerequest WHERE status = 'cancelled' OR status = 'completed'";
if ($h_result = $con->query($h_sql)) {
	$h_row_count = mysqli_num_rows($h_result);
	if ($h_row_count>0) {
		$i = 1;
		while($h_row=mysqli_fetch_assoc($h_result)) {
			$h_requestID[$i] = $h_row['requestID'];
			$date[$i] = strtotime($h_row['date']);
      $h_date[$i] = date("d/m/y", $date[$i]);
      $time[$i] = strtotime($h_row['time']);
      $h_time[$i] = date("H:ia", $time[$i]);
      $h_status[$i] = $h_row['status'];
			$h_serviceCode[$i] = $h_row['serviceCode'];
			$h_sID[$i] = $h_row['sID'];
			$i++;
		}
	}
} else {
	$h_row_count = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Requests</title>
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
 border: 2px solid white;
}
@media only screen and (max-width: 750px)
 {.log-out { margin:auto;
 display:block;
 width:25%;
 }}
@media only screen and (min-width: 750px){
.log-out {
 margin-right:2%;
 }}
 #banner{
 background:url(img/sp-banner.png) no-repeat top center fixed;
 background-size:cover;
	height:450px;
	width:100%;}
.banner-title{
	margin-top:8%;
	font-family:sans-serif;
	text-align:right;
	font-size:38px;}
@media only screen and (max-width: 1200px)
  {.banner-title {
  text-align:center;
  position:relative;
  font-size:31px;
  margin-top:15%;
  }}
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
      <ul class="nav navbar-nav navbar-center topnav">
  		<li><a href="#" id="defaultSelected"> Requests</a></li>
  		<li><a href="#">Contact Us</a></li>
  		<li><a href="helpcentre.html">Help</a></li>
    </ul>
    <!--Log Out-->
     <div class="collapse navbar-collapse" id="cl-mainNavbar">
      <a href="homepage.php" type="button" id="btn-logout" class="btn btn-default navbar-btn navbar-right log-out" >Log Out</a>
    </div>
    </div>
  </nav>
<div class="container">
<div class="row"><br><br><br>
<div class="banner-title col-lg-9 col-lg-offset-3 col-md-9 col-sm-10"><p>WE CANT HELP EVERYONE, </p><p style="margin-top:-2%">BUT EVERYONE CAN HELP</p>
<p style="margin-top:-2%">SOMEONE</p>
<a href="#pending" class="btn btn-info" id="next" role="button" style="margin-top:-2%">Review Requests</a>
</div>
</div>
</div>
</div>
</header>

<body>
<div class="container"  style="margin-top:3%">
  <div class="row">
<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
<!--Pending Requests, Upcoming Requests and History Tabs-->
  <ul class="tab nav nav-pills">
    <li style="width:30%; padding-right: 2%" ><a class="btn btn-lg btn-default" id="defaultOpen" data-toggle="tab" href="#pending">Pending</a></li>
	  <li style="width:34%; padding-right: 2%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#upcoming">Upcoming</a></li>
    <li style="width:28%; padding-right: 2%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#history">History</a></li>
  </ul>
</div>
<br>
<div class="tab-content" id="open">
<!--Pending Requests Tab-->

<div id="pending" class="tab-pane fade in active ">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<br>
<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>Service ID
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Date
    </label>
  </form></div>
      	<?php if ($p_row_count == 0) {
					echo "<p style='text-align:center'>No pending requests at the moment</p>";
				}
				else {
					for ($i = 1; $i <= $p_row_count; $i++) {
						while ($request = mysqli_fetch_object($p_result)) {
				?>

<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblOne" class="tbl ">
	<tr>
		<td>
		<a href="#myModal" data-target="#myModal" data-toggle="modal" style="color:black;text-decoration:none">
		<p style="margin:8px 13px"><span class="statusPending">pending</span>
		<span style="float:right"><?php echo $request->date, $request->time; ?></span>
		<br><span style="font-size:12px"><br>Request ID <?php echo $request->requestID; ?></span>
		<br>Senior: <?php echo $request->sID; ?>
		<div class="bottom-info">
		<span style="font-size:12px">
		<?php echo $request->serviceCode; ?></span>
		<p class="view-info">view</p></div></p>
		</a>
		</td>
	</tr>
</table>
</div>
<?php }} ?>
</div>
</div>
<br>

<!--End of Pending Requests-->
<!--Upcoming Requests Tab-->
<div id="upcoming" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>Service ID
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Date
    </label>
  </form></div>
	<div style="color:black">
	<br>
	<br>
  <?php if ($u_row_count == 0) {
    echo "<p style='text-align:center'>No requests at the moment</p>";
  }
  else{
    for ($i = 1; $i <=$u_row_count; $i++) {

echo'<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblOne" class="tbl ">
<tr>
<td>
<a href="#myModal" data-target="#myModal" data-toggle="modal" style="color:black;text-decoration:none">
<p style="margin:8px 13px"><span class="statusAccepted">accepted</span>
<span style="float:right">';
echo"$u_date[$i],$u_time[$i]";
echo'</span>
<br><span style="font-size:12px"><br>';
echo"Request ID $u_requestID[$i]";
echo'</span>';
echo "<br>Senior: $u_sID[$i]";
echo'
<div class="bottom-info">
<span style="font-size:12px">';
echo "$u_serviceCode[$i]";
echo'</span>
<p class="view-info">view</p></div></p>
</a>
</td>
</tr>
</table>
</div>'; }}?>

</div>
</div>
</div>

<!--End of Upcoming Requests-->

<!--Requests History Tab-->
<div id="history" class="tab-pane fade">
<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<div style="text-align:center">
<h5><b>Sort by:</b></h5><form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>Service ID
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Date
    </label>
  </form></div>
	<div style="color:black">
	<br>
	<br>
  <?php if ($h_row_count == 0) {
    echo "<p style='text-align:center'>No past requests</p>";
  }
  else{
    for ($i = 1; $i <=$h_row_count; $i++) {
echo'<div class="col-lg-6 col-md-6 col-sm-6" >
<table id="tblOne" class="tbl ">
<tr>
<td>
<a href="#myModal" data-target="#myModal" data-toggle="modal" style="color:black;text-decoration:none">
<p style="margin:8px 13px">';
if ($h_status[$i] == "completed"){
  echo '<span class="statusCompleted">';
} else {
  echo '<span class="statusCancelled">';
}
echo"$h_status[$i]";
echo'</span>';
echo'<span style="float:right">';
echo"$h_date[$i],$h_time[$i]";
echo'</span>
<br><span style="font-size:12px"><br>';
echo"Request ID $h_requestID[$i]";
echo'</span>';
echo "<br>Senior: $h_sID[$i]";
echo'<div class="bottom-info">
<span style="font-size:12px">';
echo "$h_serviceCode[$i]";
echo'</span>
<p class="view-info">view</p></div></p>
</a>
</td>
</tr>
</table>
</div>'; }}?>
</div>
</div>
</div>

</div>
<!--End of Requests History-->

<!-- Service Requests Details Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 35px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:1%;">pending</span><p style="float:initial;margin-top:1.5%;">01/10/18, 12:30PM</p></</p>
      </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
        Request ID 100001
      </div>
      <p><span style="float:left;padding:1% 5%;">Senior</span><a href="#detailsModal" data-target="#detailsModal" id="edit">edit</a></p>
      <div class="modal-body">

        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;">
            <div class="col-md-1 col-xs-2">
              <image style="height:64px; width:64px;" src="img/profile_pic.png"></image>
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-1">
              <b>danieltan1</b>
              <br>012-3456789
              <br><button type="button" onclick="window.location.href='userreview.php'" class="btn btn-primary btn-xs" >View Rating</button></p>
            </div>
          </div>
          <div style="padding-bottom: 20px;">
            notes: 	Please be on time yeah
          </div>
        </div>
      <div class="modal-footer" style="text-Align: left;">
        Type: Cleaning
        <button type="button" class="btn btn-default" style="float: right;"
        data-dismiss="modal">Reject</button>
        <button type="button" class="btn btn-default" style="float: right;"
        data-dismiss="modal">Accept</button>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!--Edit Details Model-->
<div class="modal fade" id="detailsModal" role="dialog">
  <div class="modal-dialog">

  <!-- Edit Details Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 35px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class="modal-title"><span class="statusPending" style="float:left;margin-top:1%;">pending</span><p style="float:initial;margin-top:1.5%;">01/10/18, 12:30PM</p></</p>
      </div>
      <div style="padding: 1% 5%; background-color: #AAAAAA;">
      Request ID 100001
      </div>
      <p><span style="float:left;padding:1% 5%;">Senior</span></p>
      <div class="modal-body">
        <div class="container">
          <div class="row" style="padding-top:10px; padding-bottom: 20px;">
            <div class="col-md-1 col-xs-12">
              <image style="height:64px; width:64px;" src="img/profile_pic.png"></image>
            </div>
          <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-0">
            <b>danieltan1</b>
            <br><p>012-3456789
            <br><button type="button" onclick="window.location.href='userreview.php'" class="btn btn-primary btn-xs" >View Rating</button></p>
			    </div>
			      <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 col-xs-offset-4" style="margin-top:0%;margin-left:-5%;float-right;text-align:center">
			      <button type="button" class="btn btn-info btn-xs" style="margin-top:25%;padding-left:22%;padding-right:22%">Cancel Service</button><br>
			      <button type="button" class="btn btn-warning btn-xs" style="margin-top:5%">Service Completed</button>
            </div>
			    </div>
        </div>
          <div style="margin-left:3%" >
            <label for="notes">notes: </label> <br>
			      <textarea name="notes" rows="3" cols="30" ></textarea>
          </div>
        </div>

      <div class="modal-footer" style="text-Align: left;width:100%">
        Type: Cleaning
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal" style="float: right"
        >Save</button>
      </div>
      </div>
    </div>
</div>


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

<!--Request anchor and New Request Tab are selected by default-->
<script>

function showDetails(a){
	var requestID = a.id;
	//AJAX call to get specific request data
	$.ajax({
		url: "requestDetails.php",
		method: "GET",
		data: {"requestID": requestID},
		success: function(response) {
			// Parsing the JSON string to Javascript msqli_fetch_object
			var request = JSON.parse(response);
			// Displaying in proper fields
		}
	})
}

document.getElementById("defaultOpen").click();
<!--function to make sure that no element will lose focus unless other button is chosen-->
$('.button').click(function() {
    $('button').removeClass('active');
    $(this).addClass('active');
})
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
})
$("#edit").on("click", function(){
    $("#myModal").modal("hide");
    $("#myModal").on("hidden.bs.modal",function(){
    $("#detailsModal").modal("show");
    });
});
$("#next").on("click", function(){
    $('#defaultOpen[href="#pending"]').tab('show');
	document.getElementById("open").scrollIntoView();
});
</script>
</body>
</html>
