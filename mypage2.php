<html><head><title> Sessoin </title></head>
<body>
    
<center>
    <?php
    session_start();
    $user= $_SESSION['username'];
    $upass= $_SESSION['userpass'];
    echo "UserName in Next Page ".$user;
    echo "<br>UserPass in Next Page ".$upass;
     session_unset();
?>
</center>
</body>