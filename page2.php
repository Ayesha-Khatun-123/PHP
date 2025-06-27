<html> <head> <title> PHp Code  </title> </head>
<body>
    <center>
        <?php
        $user=$_COOKIE['username'];
        $pass=$_COOKIE['password'];
        echo "User Name in Second Page.".$user;
         echo " <br>Password in Second Page.".$pass;
        ?>
</center>
</body>
