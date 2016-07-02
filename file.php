<?php
header('Content-Type: text/plain');
echo "Server IP: ".$_SERVER['SERVER_NAME'];
echo "\nClient IP: ".$_SERVER['REMOTE_NAME'];
echo "\nX-Forwarded-for: ".$_SERVER['HTTP_X_FORWARDED_FOR'];
?>