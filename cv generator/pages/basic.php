<!DOCTYPE html>
<html>
<head> 
<title> Basic Information </title>
<style>
	header { font-family:Hobo Std;
			background-color:grey;
			padding: 10px;
			font-size: 20px;
			text-align:left;
			color:red;			
			}
	footer{	background-color: grey;
			align: bottom;
			padding: 5px;
			text-align: center;
			position: fixed;
			left: 0;
			bottom: 0;
			right:0;
			font-size: 40px;
			color:blue;
		}
	body{
		background-image:url("../images/back2.jpg");
		background-size:cover;
		background-repeat:no-repeat;
	}
	h2{
	font-size: 40px;}
</style>
</head>
<body>
<header>
<h1><img src="../images/cv.png" alt="view" width="50px" height="55px">  CV Builder</h1>
</header>
<center>
<h2> <u>Personal information</u></h2>
<form method="post"><b>
Full Name:*<input type="text" name="name" required><br><br>
Date Of Birth:*<input type="date" name="dob" required><br><br>
E-mail address: <input type="email" name="email"><br><br>
LinkedIn Profile Link: <input type="link" name="linkedin"><br><br>
Phone no.: <input type="number" name="phnno"><br><br>
Permanant Address:* <input type="text" name="add1"required><br><br>
Temperory Address:* <input type="text" name="add2"><br><br>
         </b>
<footer>
<input type="submit" value="Save & Next" >
</form>
</footer></center>
</body>
</html>

<?php
if($_POST){
$n=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$linkedin=$_POST['linkedin'];
$phnno=$_POST['phnno'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];

$myfile = fopen("../created/personal.txt", "a") or die("unable to open file");
$txt=" Name: $n \n DOB: $dob \n LinkedIn Profile: $linkedin \n Email: $email \n Phone no.: $phnno \n Permanant Address: $add1 \n Temperory Address:$add2 \n";
fwrite($myfile, $txt);

header("Location: imageupload.php");
}
?>