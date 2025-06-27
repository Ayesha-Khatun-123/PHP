<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>
    <center>
        <form action="Login_user.php" method="post">
            <table border="1" cellpadding="5" cellspacing="0">
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
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
