<?php
  include 'views/head.php';
  include 'views/header.php';
?>
<main>
    <div class="allUsers">
        <div class="lifeUsers"><h1>Life-Long Adventurers</h1></div>
        <?php foreach($users as &$user) { ?>
        <div class="userProfile">
            <div class="userImage" style="background-image: url('<?php echo $user['image']; ?>'); background-size: 100% auto; background-color: #FFF;"></div>
            <div class="userName">
                <h2><?php echo $user['full_name'];?></h2>
            </div>
            <div class="userBio">
                <p><?php echo $user['bio'];?></p>
            </div>
            <div class="follow">
                <ul>
                    <li><a href="#">Follow</a></li>
                </ul>
            </div>
        </div>
      <?php } ?>
    </div>
    <div id="beta">
        <h2>Welcome to SoLife!</h2>
        <p>You have a passport to our <strong>beta</strong> version. Please report any issues that you   experience.</p>
    </div>
</main>
<?php include 'views/footer.php' ?>
