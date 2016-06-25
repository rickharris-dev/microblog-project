<?php
  include 'views/head.php';
  include 'views/header.php';
?>
<main>
  <form id="loginForm" method="post" action="<?php echo $_GET['return'];?>">
    <div>
      <label for="login">Login: </label>
      <input name="login" type="text">
    </div>
    <div>
      <label for="password"> Password: </label>
      <input name="password" type="password">
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
  <div id="beta">
    <h2>Welcome to SoLife!</h2>
    <p>You have a passport to our <strong>beta</strong> version. Please report any issues that you   experience.</p>
  </div>
</main>
<?php include 'views/footer.php' ?>
