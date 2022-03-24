<?php
$date = date("Y-m-d H:i:s");
$version = phpversion();
$data = array("timestamp" => $date, "hostname" => $_SERVER['SERVER_NAME'], "engine" => $version, "visitor ip" => $_SERVER['REMOTE_ADDR']);

header("Content-Type: application/json");
echo json_encode($data);
exit();
?>
