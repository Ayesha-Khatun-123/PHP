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
      $sql= "select * from emp1";
      $record= $mycon->query($sql);

      $n=  mysqli_num_rows($record);
       echo "The total number of row:".$n."<br>";
       
      if($n>0){
           while($row = mysqli_fetch_row($record))
           {
            echo $row[0]." ".$row[1]." ".$row[2]." <br>";
           }
      }
      else{
         echo "Record not found";
      }

    ?>

</center>
</body>

</html>
