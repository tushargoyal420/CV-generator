<!DOCTYPE html>
<html>
<head> 
<title> Image Upload </title>
<style>
	header { font-family:Hobo Std;
			background-color:grey;
			padding: 5px;
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
<h1><img src="../images/cv.png" alt="logo" width="50px" height="55px">CV Builder</h1>
</header>
<center>
<h2> <u>Image Upload</u></h2>

<form enctype="multipart/form-data" method="post">
Select an image:*<br><br><input type="file" name="file" required><br>
         
<footer>
<input type="submit" value="Upload & Next" name="image"> 
</form>
</footer></center>
</body>
</html>

<?php
if($_POST){ 
$filepath = "../created/" . $_FILES["file"]["name"];
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 

header("Location: education.php");
}
?>