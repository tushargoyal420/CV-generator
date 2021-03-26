<!DOCTYPE html>
<html>
<head> 
<title>Additional Skills </title>
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
	input[type=text] {
  width: 80%;
 height:50px;
  padding: 92px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}h2{
	font-size: 40px;}
</style>
</head>
<body>
<header>
<h1><img src="../images/cv.png" alt="logo" width="50px" height="55px">  CV Builder</h1>
</header><center>
<h2> <u>Additional Skills </u></h2>
<form method="post">
<br> <textarea name="addskills" cols="50" rows="10"></textarea><br>
<footer>
<input type="submit" value="Confirm">
</form>
</footer></center>
</body>
</html>
<?php
if($_POST){
$skill = $_POST['addskills'];

$myfile = fopen("../created/User.docx", "a") or die("unable to open file");
$txt=" $skill \n";
fwrite($myfile, $txt);

header("Location: final.php");
}
?>










