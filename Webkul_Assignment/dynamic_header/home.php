

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="navbar">
        <ul class="list">
            <?php session_start();?>
        <li class="items"><a href="">Sign up</a></li>
            <?php if(isset($_SESSION["logged"])){ ?>
                <li class="items"><a href="">logged<?php session_destroy();?></a></li>
            <?php } else{ ?>
                <li class="items"><a href="signin.php">Sign in</a></li>
            <?php } ?>
        </ul>
        
    </div>
</body>
</html>
