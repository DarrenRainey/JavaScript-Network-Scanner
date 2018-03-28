<!DOCTYPE html>
<?php
$data = $_GET["data"];
$line = date('d-m-Y H:i:s') . "	-	Device: $data 		-	Origin: $_SERVER[REMOTE_ADDR]	-	User-Agent: $_SERVER[HTTP_USER_AGENT]";
file_put_contents('scan.log', $line . PHP_EOL, FILE_APPEND);
?>
