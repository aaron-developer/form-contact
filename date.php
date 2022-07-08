<?php

//time 
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). " " ;

//---------------------------------
//read the archivies
$myfile = fopen("hacker.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hacker.txt"));
fclose($myfile);

//---------------------------------
/*
$txt = "W3Schools.com";
echo " " . "<h6> Teaching <h6/> " . "<h2>$txt<h2/>" ;

//---------------------------------

$x = 5;
$y = 4;
echo $x + $y;
*/

?>

