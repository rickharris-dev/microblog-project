<?php
if (isset($_COOKIE["login"])){
  setcookie("login", null, -1, '/');
}
header("Location: /index.php");
?>
