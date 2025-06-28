<html>
    <head><title>PHP</title> </head>
    <body>

        <center>
            <?php
            $mycon=mysqli_connect("localhost","root","Ayesha@2003","phpdatabase");
            session_start();
            $eid=$_SESSION['$empid'];
            $sql= "delete from emp1 where empid=?";
            $ps= $mycon->prepare($sql);
            $ps->bind_param("i",$eid);
            $ps->execute();
            echo "Record Delete Succesfully";



            ?>

        <center>