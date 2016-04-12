<?php
$users = [
  array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "Asaia Palacios", "image" => "https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/017/thumb/IMG_1916.JPG", "bio" => "Software Engineer at Holberton School. Beginning is the adventure. Tech + Social Innovation + Impact = Awesomeness"),
  array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "Rick Harris", "image" => "https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg", "bio" => "Full-stack Software Engineer | @holbertonschool Student | Fan of the @FightingIrish | Opinions represented are my own"),
  array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "Sylvain Kalache", "image" => "https://pbs.twimg.com/profile_images/507049627757981696/BDVshlD3.jpeg", "bio" => "@HolbertonSchool co-founder: training Full Stack Software Engineers • ex @slideshare/@linkedin • #while42"),
  array("id" => 4, "login" => "user4", "password" => "password4", "full_name" => "Julien Barber", "image" => "https://pbs.twimg.com/profile_images/656781064489345029/6dngTeSR.jpg", "bio" => "Co-founder at @holbertonschool • Former head of Marketing, Growth & Community at @docker • #while42"),
  array("id" => 5, "login" => "user5", "password" => "password5", "full_name" => "Rudy Rigot", "image" => "https://pbs.twimg.com/profile_images/700158258850336769/RG0a3-ZT_400x400.jpg", "bio" => "Co-founder @holbertonschool • Become a full-stack software engineer. Ex-Apple engineer. I love learning new stuff, meeting interesting people, and cheesecake."),
  array("id" => 6, "login" => "user6", "password" => "password6", "full_name" => "Electra Chong", "image" => "https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/018/thumb/10805743_744774678939939_1422144655117219420_n.jpg", "bio" => "Young IT professional and proud @scrippscollege recent grad with a degree in linguistics. I like languages, learning web dev, and art! Student @holbertonschool"),
];

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
