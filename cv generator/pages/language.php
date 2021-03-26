<!DOCTYPE html>
<html>
<head> 
<title> Language & Additional Skills </title>
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
<h1><img src="../images/cv.png" alt="logo" width="50px" height="55px">  CV Builder</h1>
</header>
<center>
<h2><u> Language</u> </h2>
<form method="post">
<textarea name="language" cols="30" rows="3"></textarea><br>

<h2> <u>Additional Skills </u></h2>
<textarea name="addskills" cols="50" rows="10"></textarea><br>

<footer>
<input type="submit" value="Next">
</form>
</footer></center>
</body>
</html>
<?php
if($_POST){
$language = $_POST['language'];
$skill = $_POST['addskills'];

$myfile = fopen("../created/additional.txt", "a") or die("unable to open file");
$txt="Language: $language \n\nSkill: $skill \n";
fwrite($myfile, $txt);

header("Location: final.php");

}?>










