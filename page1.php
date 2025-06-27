<html> <head> <title> PHp Code  </title> </head>
<body>
    <center>
    
    <?php
      $user=$_POST['txtuser'];
      $pass=$_POST['txtpass'];

      echo "The first page user name is:".$user;
      echo "<br>The first page user password is:".$pass;

      $ckname="username";
      $cknamevalue= $user;

      $ckpass="password";
      $ckpassvalue=$pass;

      setcookie($ckname,$cknamevalue);
      setcookie($ckpass,$ckpassvalue);


      ?>
       
       <form action="page2.php" method="post">
      <input type=submit value="Submit">

        
</form>

    </center>

</body>