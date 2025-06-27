<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
    <center>
        <form method= post action =InsertEmp.php>
            Id: <input type =text name=txtid>
            <br>
            Name:<input type =text name=txtname>
            <br>
            Salary:<input type =text name=txtsalary>
            <br>
            <input type =submit value=Submit name=btnSubmit>

        </form>
        <?php
        if(isset($_POST['btnSubmit']))
       {
        $eid=$_POST['txtid'];
        $ename=$_POST['txtname'];
        $esal=$_POST['txtsalary'];

        $mycon = mysqli_connect("localhost", "root", "Ayesha@2003", "phpdatabase");
        echo "Connection Successful";
        $sql= "insert into emp1 values(?,?,?)";
        $ps= $mycon->prepare($sql);
        $ps->bind_param("isi",$eid,$ename,$esal);
        $ps->execute();
        echo "Record Inserted Succesfully";
       }
        
        ?>
    </center>
</body>
</html>
