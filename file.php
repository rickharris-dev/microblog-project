<?php
header('Content-Type: text/plain');
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;
?>