<?php
session_start();
$connect=mysqli_connect("localhost","root",'',"tsz");
function find_mail($id)
{
$connect=mysqli_connect("localhost","root",'',"tsz");
	if(isset($_POST['submit1']))
	{
		$query="select * from national;";
		$result=mysqli_query($connect,$query);
		while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))	
		{
				if($r['dept_id']==$id)
					{
						$email=$r['email_id'];
						}
				else
					continue;
			}
		}
	if(isset($_POST['submit2']))
	{
		$query="select * from state;";
		$result=mysqli_query($connect,$qwery);
		while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))	
		{
				if($r['dept_id']==$id)
					{
						$email=$r['email_id'];
						break;
						}
				else
					continue;
			}
		}
return $email;
}
function upload_success()
{
$connect=mysqli_connect("localhost","root",'',"tsz");
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if((isset($_POST["submit1"]))OR(isset($_POST["submit1"]))) {
    $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filetoupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["filetoupload"]["name"]). " has been uploaded.";
    return true;
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    return false;
    }
}
	}
function login()
{
$connect=mysqli_connect("localhost","root","","tsz");
	if(isset($_POST['signup'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pword=$_POST['pword'];
$phone=$_POST['phone'];
$query="select * from user where email_id='$email';";
$result=mysqli_query($connect,$query);
$no=mysqli_num_rows($result);
if($no)
{
	echo "this Account already exists";die();
	}
else
	{
	$query="insert into user values('$name','$email','$phone','$pword');";
	$res=mysqli_query($connect,$query);
	if($res)
			{
				$query1="insert into feedback values('$email','0','0')";
				$res1=mysqli_query($connect,$query);
				echo "<script>alert('account creation successful.Go back and Login');</script>";die();}
		else 
			{echo "failed to create an account";die();}
	}
}
else if(isset($_POST['login']))
{
$email=$_POST['email'];
$pass=$_POST['pword'];
$query="select * from user where email_id='$email';";
$result=mysqli_query($connect,$query);
$no=mysqli_num_rows($result);
if(!$no)
{
	echo "Account does not exist!";die();
	}
else
	{
$query2="select * from feedback f,user u where f.email=u.email_id and u.email_id='$email';";
$result2=mysqli_query($connect,$query2);
$num=mysqli_num_rows($result2);
	while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))	
		{
				if($r['password']==$pass)
					{
						$_SESSION['name']=$r['name'];
						$_SESSION['phone']=$r['phone'];
						$_SESSION['email']=$r['email_id'];
					}
				else {echo "INCORRECT PASSWORD";die();}
		}
	}
}
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
