<?php
  include_once 'model/user.php';
  include_once 'model/status.php';
  $currentUser = false;

  function userExists($login, $password, $users) {
    foreach ($users as &$elem) {
      if ($login == $elem['login'] && $password == $elem['password']){
        return $elem;
      } else {
        return false;
      }
    }
  }

  function checkLogin($login, $users){
    foreach ($users as &$elem) {
      if ($login == $elem['login']) {
        return $elem;
      }
    }
    return false;
  }

  if (isset($_COOKIE["login"])){
    $currentUser = checkLogin($_COOKIE["login"],$users);
  } else if ($_POST['login']){
    $currentUser = userExists($_POST['login'], $_POST['password'], $users);
    setcookie("login",$currentUser['login']);
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SoLife | Your Passport to Life</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/midsize.css">
        <link rel="stylesheet" type="text/css" href="css/smartphone.css">
        <script src="js/google.js" type="text/javascript"></script>
        <script src="js/toggle.js" type="text/javascript"></script>
        <script src="js/post_a_status.js" type="text/javascript"></script>
        <script src="js/reply.js" type="text/javascript"></script>
        <script src="js/load_more.js" type="text/javascript"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
    </head>
