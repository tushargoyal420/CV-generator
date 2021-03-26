<!DOCTYPE html>
<html>
<head> 
<title> Education Detais </title>
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
			font-size: 20px;
			color:blue;
		}
	body{
		background-image:url("../images/back2.jpg");
		background-size:cover;
		background-repeat:no-repeat;
	}
	
	h2{
	font-size: 40px;}
</style> </head> 
<body>
<header>
<h1><img src="../images/cv.png" alt="logo" width="50px" height="55px">  CV Builder</h1>
</header>
<center><h2><u>Education Details</u></h2></center>
<form method="post"><center>
School/Institute <input type="text" name="schname"><br><br>
Year of Joining <input type="number" name="schjoinyear"><br><br>
Year of Ending <input type="number" name="schendyear"><br><br>
City<input type="text" name="schcity"><br><br>
</center>
<footer>
Add new:
</b> Yes<input type="radio" name="newexp" value="yes">
No<input type="radio" name="newexp" value="no">
<br>
<input type="submit" value="Save & Next">
</form>
</footer>
</body> 
</html>
<?php
if($_POST){
$schname = $_POST['schname'];
$schjyear = $_POST['schjoinyear'];
$scheyear = $_POST['schendyear'];
$schcity = $_POST['schcity'];

$newexp= $_POST['newexp'];

$myfile = fopen("../created/Education.txt", "a") or die("unable to open file");
$txt="Educational Details- \n School Name: $schname \n School Join Year: $schjyear \n School End Year: $scheyear \n City: $schcity \n \n ";
fwrite($myfile, $txt);

if($newexp==yes){
	header("Location: education.php");
}
	
else{
header("Location: workexp.php");
}
}?>











