<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>

<body>
    <center>

    <?php
     $mycon=mysqli_connect("localhost","root","Ayesha@2003","phpdatabase");
     //echo "Connection Succesful";
      $sql= "select * from emp1 ";
      $record= $mycon->query($sql);

      $n=  mysqli_num_rows($record);
       echo "The total number of row:".$n."<br>";
       
      if($n>0){
      //  while($row = mysqli_fetch_assoc($record))
      //echo"$row[empid]." ".$row[empname]." ".$row[empsalary]
     // while($row = mysqli_fetch_row($record))
           //{
            //echo $row[0]." ".$row[1]." ".$row[2]." <br>";
           //}
      echo "<table border='1'>";
echo "<tr><th>Emp Id</th> <th>Emp Name</th> <th>Emp Salary</th></tr>";
while($row = mysqli_fetch_row($record)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "</tr>";
}
echo "</table>";
      }


      else{
         echo "Record not found";
      }
 $mycon->close();
    ?>

</center>
</body>

</html>
