<!DOCTYPE html>
<?php // This can/will be improved at some point
$line = date('d-m-Y H:i:s') . " - $_SERVER[REMOTE_ADDR] 	$_SERVER[HTTP_USER_AGENT]";
file_put_contents('access.log', $line . PHP_EOL, FILE_APPEND);

$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('scandata.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);
?>
