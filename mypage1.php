<html><head><title> Sessoin </title></head>
<body>
<center>
     
<?php
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];

echo "UserName:".$user;
echo "<br>Password:".$pass;

session_start();
$_SESSION['username']=$user;
$_SESSION['userpass']=$pass;

?>
<form method="post" action="mypage2.php">
    <input type=submit value=submit>

</form>

</center>
</body>