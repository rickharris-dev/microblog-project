<?php
header('Content-Type: text/plain');
echo shell_exec("awk '/^38-/' /etc/hostname");
?>