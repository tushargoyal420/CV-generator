<!doctype html>
<html>
<head><title> Read the CV </title>
<style>
	header { font-family:Hobo Std;
			background-color:#bbbb;
			padding: 5px;
			font-size: 20px;
			
			color:red;			
			}
	footer{	background-color: #bbbb;
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
		background-image:url("images/back2.jpg");
		background-size:cover;
		background-repeat:no-repeat;
	}
	
	h2{
	font-size: 40px;}

</style>

</head>
<body>
<header>
<h1>Your CV </h1>
</header><b>
<?php 

$myfile ="personal.txt";
$file = fopen($myfile, 'r'); 
while(! feof($file)) 
{
  $line = fgets($file);
  echo $line. "<br>";
}

fclose($file);

$myfile1 ="Education.txt";
$file1 = fopen($myfile1, 'r'); 
while(! feof($file1)) 
{
  $line = fgets($file1);
  echo $line. "<br>";
}

fclose($file1);


$myfile2 ="workexp.txt";
$file2 = fopen($myfile2, 'r'); 
while(! feof($file2)) 
{
  $line = fgets($file2);
  echo $line. "<br>";
}

fclose($file2);


$myfile3 ="additional.txt";
$file3 = fopen($myfile3, 'r'); 
while(! feof($file3)) 
{
  $line = fgets($file3);
  echo $line. "<br>";
}

fclose($file3);


?>

<footer><p>ThankYou For using our Website</p>
<a href="../Front.php">Back to main Menu</a></footer> 
</b>
</body>
</html>
