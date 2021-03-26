<!DOCTYPE html>
<html>
<head> 
<title> Work Experience </title>
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
<h2> <u>Work Experience</u> </h2>
<form method="post">
<b>Job Title <input type="text" name="jobtitle"><br><br>
Job Description <input type="text" name="jobdes"><br><br>
Year of Joining <input type="number" name="jobjoindate"><br><br>
Year of Ending <input type="number" name="jobenddate"><br><br>
City<input type="text" name="jobcity"><br><br>

Add new:<br>
</b> Yes<input type="radio" name="newexp" value="yes">
No<input type="radio" name="newexp" value="no">
<footer>
<input type="submit" value="Next">
</form> 
</footer> 
</center></body> 
</html>

<?php
if($_POST){
$jobtit = $_POST['jobtitle'];
$jobdes = $_POST['jobdes'];
$jobjdate = $_POST['jobjoindate'];
$jobedate = $_POST['jobenddate'];
$jobcity = $_POST['jobcity'];
$newexp= $_POST['newexp'];

$myfile = fopen("../created/workexp.txt", "a") or die("unable to open file");
$txt="Work Experience- \n Job Title: $jobtit \n Job Description: $jobdes \n Year of Joining: $jobjyear \n Year of Ending: $jobeyear \n City: $jobcity \n";
fwrite($myfile, $txt);

if($newexp==yes){
	header("Location: workexp.php");
}
	
else{
header("Location: language.php");
}
}

?>