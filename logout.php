<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
	<link href='http://bootswatch.com/yeti/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='./assets/css/main.css' rel='stylesheet' type='text/css'>
		<link rel="icon" href="./assets/images/logo.png">
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid" style="margin:0px;padding:0px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TheSaferZone</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       <li ><a href="index.html">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="contact">Contact</a></li>
        <li ><a href="aboutus">About</a></li>
          <li disabled><a><b>Signup</b></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
<img src="./assets/images/logoutsuccess.png" height=400px; width=400px;>
<h1 style="text-align:center; font-size:42px;"><b>Log Out Successful<b></h1>
</div>
	<div class="col-md-3"></div>
</body>
</html>
<?php }?>
