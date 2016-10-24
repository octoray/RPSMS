<?php
echo"<br>";

echo"<br>";
echo"<br>";
echo print_r($_SERVER);
echo"<br>";
echo"<br>";
echo"response header";
echo print_r($http_response_header);
echo"<br>";
echo"Request";
echo print_r($_REQUEST);


//Write logs
$arr = $_SERVER;
// echo implode(" ",$arr);
$today1 = date("Y-m-d H:i:s");
$myFile = "mainpage.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n";
fwrite($fh, $stringData);
fwrite($fh, $today1. ": headers: " .implode(" ",$arr));
fclose($fh);
?>