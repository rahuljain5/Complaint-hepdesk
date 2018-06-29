<html>
	<head>
	<title>TheSaferZone|Contact</title>
	<link href='./assets/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link rel="icon" href="./assets/images/logo.png">
</head>
<body>
<nav class="navbar navbar-default" style="margin-bottom:0px;">
  <div class="container-fluid" style="margin-bottom:0px;">
    <div class="navbar-header" style="margin-bottom:0px;">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><b>TheSaferZone<img src="./assets/images/logo.png" width="75px" height="35px" /></b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-bottom:0px;margin-top:0px;">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
	  <li><a href="contact.html">Contact</a></li>
      <li><a href="aboutus.html">About</a></li>
      <li ><a ><b onclick="document.getElementById('login-modal').style.display='block'">Login/Sign Up</b></a></li>
      </ul>
      </div>
  </div>
</nav>
<h1 style="text-align:center; "><b>Welcome to password recovery</b></h1>
<div class="row">
	<div class="col-md-4"></div>
<div class="col-md-4">
	<br/><br/><br/><br/>
<fieldset style="text-align:center; border:2px solid black;">
<form class="form-horizontal" method="post" action="htmlspecialchars($_SERVER['PHP_SELF'])">
<h2>Email</h2>
<input name="email" placeholder="email here!" />
<h2>Phone</h2>
<input name="phone" placeholder="phone here!" /><br/>
<button type="submit" value="submit">SUBMIT</button>
</form>
</fieldset>
</div>
<div class="col-md-4"></div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="footer-end-container" style="background:black;color:white; height:30px; ">
                    <div class="copyright wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" style="display:inline;">
                        Copyright 2017 &copy; WeDev
                    </div>
                    <div class="createdby wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.3s" style="display:inline;float:right;">
                            Created by WeDev
							<img alt="WeDev" src="./assets/images/we-dev.png" width="40px" height="30px">
							</div>
</div>
</body>
</html>
<?php
include 'func.php';
if (isset($_POST['submit'])) {
    $connect = mysqli_connect("localhost", "root", "", "tsz");
    $mail = $_POST['email'];
    $phno = $_POST['number'];
    $new_passkey = generateRandomString();
    echo "<h1>Your New Password is:'$new_passkey'</h1>";
    $query = "update user set password='$new_passkey' where mail='$mail';";
    $result = mysqli_query($connect, $query);
    if (!res) {
        echo "Failed to update";
    }
}
?>
