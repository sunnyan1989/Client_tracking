
<?php

$model = $_POST['model']; 
$vendor = $_POST['vendor']; 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$url = $_POST['url'];


$myFile = "tracktxt.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = date('Y-m-d H:i:s').", " .$ipaddress.", " .$url.", ".$vendor.", ".$model."\r\n";
fwrite($fh, $stringData);
fclose($fh);

?>

