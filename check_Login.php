<html>
    <head><title>
        PHP</title>
</head>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
         $pass=$_POST['txtpass'];

         if(strcmp($user,"ayesha")==0 and strcasecmp ($pass,"12345") == 0)
           echo" <font color=green> You are a valid User </font>";
         else
          echo" <font color=red> You are a  not valid User </font>";
         

        ?>

   </center
</body>
