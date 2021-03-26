<?php
$myfile ="personal.txt";
$file = fopen($myfile, 'r'); 
while(! feof($file)) 
{
  $line = fgets($file);
  echo $line. "<br>";
}

fclose($file);

?>