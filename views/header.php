<body>
    <div id="container">
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
                    <ul><?php if($currentUser){?>
                        <li><a href="#">Edit my profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li>Hello, <?php echo $currentUser['full_name'];?>!</li>
                        <?php } else { ?>
                        <li><a href="login.php?return=<?php echo $_SERVER['REQUEST_URI']?>">Login</a></li>
                        <li>Hello, there!</li>
                        <?php } ?>
                    </ul>
                    <?php if ($currentUser) {?>
                    <ul>
                      <li>Your rot13'd login is: <?php echo str_rot13($currentUser['login'])?></li>
                      <li>The length of your login is: <?php echo strlen($currentUser['login']);?></li>
                    </ul>
                    <?php } ?>
                </div>
                <div id="links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="profile.php">Statuses</a></li>
                        <li><a href="users.php">Users</a></li>
                        <li><a href="octopus-fitness.php">About</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
          <?php
          if ($currentUser == false && $_POST)
            echo "<div id=\"loginError\">Invalid credentials</div>"
          ?>
