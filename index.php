<?php
  include 'views/head.php';
  include 'views/header.php';
?>
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
        <?php
        $c = 0;
        for ($i = 0; $i < 10; $i++) { ?>
        <div id="status<?php echo $status[$i]['id']?>" class="status">
          <div class="profile"><img class="image" src="<?php echo $users[$status[$i]['userId']]['image']?>" alt="<?php echo $users[$status[$i]['userId']]['full_name']?> profile image"/></div>
          <div class="name"><?php echo $users[$status[$i]['userId']]['full_name']?></div>
          <div class="user">@<?php echo $users[$status[$i]['userId']]['login']?></div>
          <div class="post"><?php echo $status[$i]['status']?></div>
          <div class="posted"><?php echo $status[$i]['timestamp']?></div>
        </div>
      <div class="replies">
        <a href="#status<?php echo $status[$i]['id']?>" class="reply">Reply</a>
      </div>
      <div class="replyForm">
        <label for="replyText<?php echo $status[$i]['id']?>">Your Reply</label><br><textarea id="replyText<?php echo $status[$i]['id']?>"></textarea><br/>
        <input id="replyCheck<?php echo $status[$i]['id']?>" type="checkbox" name="location"/><label for="replyCheck<?php echo $status[$i]['id']?>">Include Location</label><br/>
        <input type="submit" class="post" value="Post"/>
      </div>
      <div class="userReplies"></div>
      <?php } ?>
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
<?php include 'views/trending.php' ?>
    </aside>
    <div id="beta">
        <h2>Welcome to SoLife!</h2>
        <p>You have a passport to our <strong>beta</strong> version. Please report any issues that you   experience.</p>
    </div>
<?php include 'views/footer.php' ?>
