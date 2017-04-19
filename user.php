<?php
include('func.php');
if((isset($_POST['signup']))OR(isset($_POST['login'])))
{
	$connect=mysqli_connect("localhost","root","","tsz");
	login();
$re=mysqli_query($connect,"select nop,non from feedback where email='$_SESSION[email]';");
$r=mysqli_fetch_array($re,MYSQLI_ASSOC);
$total=$r['nop']+$r['non'];
}
?>
<html>
<head>
    <title>User Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
	<link href='bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='main.css' rel='stylesheet' type='text/css'>
	<link rel="icon" href="logo.png">
</head>
<body>
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
         <li class="active"><a href="#"><b><?php echo $_SESSION['name']; ?></b></a></li>
         <li onclick="document.getElementById('logout-modal').style.display='block'"><a><b>logout</b></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal" id="logout-modal" style="display:none; overflow:auto;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="document.getElementById('logout-modal').style.display='none'">&times;</button>
        <h4 class="modal-title">confirm logout</h4>
      </div>
      <div class="modal-body">
		   <form class="form-horizontal" method="post" action="logout.php" >
		<h2>Are you sure you want to logout?</h2>
		<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById('logout-modal').style.display='none'">Close</button>
        <button type="submit" name="logout" class="btn btn-primary">Yes</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-1">
	<a href="#" class="btn btn-primary btn-lg" style="display:inline">My complaints<span class="badge" style="display:inline;background-color:red;"><?php echo $total;?></span></a>
		</div>
			<div class="col-md-3" >
			<br/><br/><br/><br/>
		<div style="height:400px; width:400px; border-radius:100px; border:2px solid black; background:navy; display:inline-block; background-image:url('Goi.png');">
		<h1  style="color:white; position:absolute; top:67%; left:10%"><button style="background-color:rgba(0,0,0,0.4); display:inline-block; border:1px solid black;" onclick="document.getElementById('modal1').style.display='block'"><b>Govt. of India</b></button></h1>
		</div>
		</div>
		<div class="col-md-1"></div>
			<div class="col-md-3" >
				<br/><br/><br/><br/>
		<div style="height:400px; width:400px; border-radius:100px; border:2px solid black; background:navy; display:inline-block; text-align:center;background-image:url('india.jpg');">
		<h1  style="color:white; position:absolute; top:67%; left:12%"><button style="background-color:rgba(0,0,0,0.4); display:inline-block; border:1px solid black;" onclick="document.getElementById('modal2').style.display='block'"><b>State Govt</b></button></h1>
		</div>
							</div>
		<div class="col-md-1"></div>
	<div class="col-md-3">
	<fieldset style="border:2px solid black; text-align:center; background:silver;"><br/>
		<div class="dev-pics" style="background:white; background-image:url('avatar.png')"></div>
		<h2><?php echo $_SESSION['name'];?></h2><br/>
		<h2><?php echo $_SESSION['email'];?></h2><br/>
		<h2><?php echo $_SESSION['phone'];?></h2><br/>
	</fieldset>
 </div>
</div>
<div class="modal" id="modal1" style="display:none; overflow:auto;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="document.getElementById('modal1').style.display='none'">&times;</button>
        <h4 class="modal-title">Complaint Desk(Govt. of India)</h4>
      </div>
      <div class="modal-body">
		   <form class="form-horizontal" action="post" >
		<h2>Enter Department</h2>
		<select class="form-control" id="select" name="deptid" required autocomplete="off">
          <option selected disabled>--Choose Department--</option>
          <option value="agri">Agriculture</option>
          <option value="ksiidc">KSIIDCIT</option>
          <option value="leather">Leather industry</option>
          <option value="nic">National Informatics center</option>
          <option value="iicc">IRCTC</option>
          <option value="icrp">ICRPC</option>
          <option value="indian_bank">Indian Bank</option>
        </select>
        <h2>Subject</h2>
		<input type="text" name="sub" placeholder="Enter subject here" autocomplete="off" required/>
		<h2>Message</h2>
		<textarea type="text" name="msg" placeholder="Enter Grievience here" autocomplete="off" required></textarea>
		 <h2>Upload File to be sent as an attachment(optional)</h2>
      <input type="file" placeholder="choose file" name="filetoupload" id="filetoupload">
      <h5 style="color:red">Only png,jpg and pdf allowed</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById('modal1').style.display='none'">Close</button>
        <button type="submit1" name="mailsend" class="btn btn-primary">Send</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="modal2" style="display:none; overflow:auto;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="document.getElementById('modal2').style.display='none'">&times;</button>
        <h4 class="modal-title">Complaint Desk(State Govt)</h4>
      </div>
      <h4 style="color:red;">Currently only Karnataka</h4>
      <div class="modal-body">
		   <form class="form-horizontal" action="main.php" method="post" enctype="multipart/form-data">
		<h2>Choose Department</h2>
		<select class="form-control" id="select" name="deptid" required autocomplete="off">
          <option selected disabled>--Choose Department--</option>
          <option value="cm_office">chiefminister</option>
          <option value="agri_kar">Agriculture</option>
          <option value="bwssb_kar">BWSSB</option>
          <option value="trans_kar">Transport</option>
          <option value="law_kar">Law</option>
          <option value="dgp_kar">G-Police</option>
         </select>
        <h2>Subject</h2>
		<input type="text" name="sub" placeholder="Enter subject here" autocomplete="off" required/>
		<h2>Message</h2>
		<textarea type="text" name="msg" placeholder="Enter Grievience here" autocomplete="off" required></textarea>
		<h2>Upload File to be sent as an attachment(optional)</h2>
      <input type="file" placeholder="choose file" name="filetoupload" id="filetoupload">
      <h5 style="color:red">Only png,jpg and pdf allowed</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById('modal2').style.display='none'">Close</button>
        <button type="submit2 " name="mailsend" class="btn btn-primary">Send</button>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
