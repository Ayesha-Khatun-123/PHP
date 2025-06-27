<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table border="2" >
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="txtuser" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="txtpass" required></td>
                </tr>
                <tr>
                    <th>Action</th>
                    <td>
                        <input type="submit" value="Submit" name="submitbtn">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['submitbtn'])){

        
        $user=$_POST['txtuser'];
         $pass=$_POST['txtpass'];

         if(strcmp($user,"ayesha")==0 and strcasecmp ($pass,"12345") == 0)
         //  echo" <font color=green> You are a valid User </font>";
        header("Location:first.php");

         else
          echo" <font color=red> You are a  not valid User </font>";
        }

        ?>
        
    </center>
</body>
</html>
