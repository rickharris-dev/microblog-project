<?php
  $users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];

  function userExists($login, $password, $users) {
    foreach ($users as &$elem) {
      if ($login == $elem['login'] && $password == $elem['password']){
        return $elem;
      } else {
        return false;
      }
    }
  }
  if ($_POST['login'])
    $user = userExists($_POST['login'], $_POST['password'], $users);

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
    <body>
        <div id="container">
          <?php
          if ($user == false && $_POST)
            echo "<div id=\"loginError\">Invalid credentials</div>"
          ?>
            <header>
                <div id="hleft">
                    <div id="logo">
                        <img src="http://www3.nd.edu/~rharris8/newsletter/logo.png" alt="SoLife"/>
                    </div>
                    <div id="tagline">
                        <h1>Your Passport to Life.</h1>
                    </div>
                </div>
                <div id="hright">
                    <div id="account">
                        <ul>
                            <li><a href="#">Edit my profile</a></li>
                            <li><a href="login.php">Logout</a></li>
                            <li>Hello, <?php
                              if ($user) {
                                echo $user['full_name'];
                              } else {
                                echo "there";}?>!
                            </li>
                        </ul>
                        <?php if ($user) {?>
                        <ul>
                          <li>Your rot13'd login is: <?php echo str_rot13($user['login'])?></li>
                          <li>The length of your login is: <?php echo strlen($user['login']);?></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div id="links">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="profile.html">Statuses</a></li>
                            <li><a href="users.html">Users</a></li>
                            <li><a href="octopus-fitness.html">About</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <main>
                <article>
                  <div id="statusForm">
                    <label for="postText">Your Reply</label><br><textarea id="postText"></textarea><br/>
                    <input id="postCheck" type="checkbox" name="location"/><label for="postCheck">Include Location</label><br/>
                    <input type="submit" id="postButton" class="post" value="Post"/>
                  </div>
                  <div id="statusNew">
                    <a href="#statusForm" id="newStatus">Post a status</a>
                  </div>
                  <div id="allStatuses">
                    <h2>SoLife Updates</h2>
                    <div id="status1" class="status">
                      <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                      <div class="name">Rick Harris</div>
                      <div class="user">@rick.harris</div>
                      <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                      <div class="posted">February 4, 2016 9:30AM</div>
                    </div>
                  <div class="replies">
                    <a href="#status1" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText9">Your Reply</label><br><textarea id="replyText9"></textarea><br/>
                    <input id="replyCheck9" type="checkbox" name="location"/><label for="replyCheck9">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status2" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Tickets for Copa America 2016 in Santa Clara are on sale today. Two tickets for all games in Santa Clara about $2500. That's crazy!</div>
                    <div class="posted">February 4, 2016 10:23AM</div>
                  </div>
                  <div class="replies">
                    <a href="#status2" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText10">Your Reply</label><br><textarea id="replyText10"></textarea><br/>
                    <input id="replyCheck10" type="checkbox" name="location"/><label for="replyCheck10">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status3" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status3" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText1">Your Reply</label><br><textarea id="replyText1"></textarea><br/>
                    <input id="replyCheck1" type="checkbox" name="location"/><label for="replyCheck1">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status4" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status4" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText2">Your Reply</label><br><textarea id="replyText2"></textarea><br/>
                    <input id="replyCheck2" type="checkbox" name="location"/><label for="replyCheck2">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status5" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status5" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText3">Your Reply</label><br><textarea id="replyText3"></textarea><br/>
                    <input id="replyCheck3" type="checkbox" name="location"/><label for="replyCheck3">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status6" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status6" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText4">Your Reply</label><br><textarea id="replyText4"></textarea><br/>
                    <input id="replyCheck4" type="checkbox" name="location"/><label for="replyCheck4">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status7" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status7" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText5">Your Reply</label><br><textarea id="replyText5"></textarea><br/>
                    <input id="replyCheck5" type="checkbox" name="location"/><label for="replyCheck5">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status8" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status8" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText6">Your Reply</label><br><textarea id="replyText6"></textarea><br/>
                    <input id="replyCheck6" type="checkbox" name="location"/><label for="replyCheck6">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status9" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status9" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText7">Your Reply</label><br><textarea id="replyText7"></textarea><br/>
                    <input id="replyCheck7" type="checkbox" name="location"/><label for="replyCheck7">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                  <div id="status10" class="status">
                    <div class="profile"><img class="image" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/038/thumb/rick.jpg" alt="Rick Harris profile image"/></div>
                    <div class="name">Rick Harris</div>
                    <div class="user">@rick.harris</div>
                    <div class="post">Hanging out at Holberton School! Getting to work on HTML and CSS</div>
                    <div class="posted">February 4, 2016 6:30PM</div>
                  </div>
                  <div class="replies">
                    <a href="#status10" class="reply">Reply</a>
                  </div>
                  <div class="replyForm">
                    <label for="replyText8">Your Reply</label><br><textarea id="replyText8"></textarea><br/>
                    <input id="replyCheck8" type="checkbox" name="location"/><label for="replyCheck8">Include Location</label><br/>
                    <input type="submit" class="post" value="Post"/>
                  </div>
                  <div class="userReplies"></div>
                </div>
                <div id="moreStatuses">
                  <input id="moreStatusesButton" type="button" value="See More Statuses"/>
                </div>
                </article>
                <aside>
                    <div class="userProfile home">
                        <h2 class="notableUser">Notable User</h2>
                        <div class="userImage"><img src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/017/thumb/IMG_1916.JPG" alt="Asaia Palacios profile image"/></div>
                        <div class="userName">
                            <h3>Asaia Palacios</h3>
                        </div>
                        <div class="userBio">
                            <p>Software Engineer at Holberton School. Beginning is the adventure. Tech + Social Innovation + Impact = Awesomeness</p>
                        </div>
                    </div>
                    <div class="trending">
                        <h2>Trending</h2>
                        <ul>
                            <li>Kobe</li>
                            <li>#TheWalkingDead</li>
                            <li>Valentine's Day</li>
                            <li>#RHOA</li>
                            <li>Paul George</li>
                        </ul>
                    </div>
                </aside>
                <div id="beta">
                    <h2>Welcome to SoLife!</h2>
                    <p>You have a passport to our <strong>beta</strong> version. Please report any issues that you   experience.</p>
                </div>
            </main>
            <footer>
                <div id="footerLinks">
                  <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="profile.html">Statuses</a></li>
                      <li><a href="users.html">Users</a></li>
                      <li><a href="octopus-fitness.html">About</a></li>
                  </ul>
                </div>
                <p>2016 &copy; SoLife</p>
            </footer>
        </div>
    </body>
</html>
