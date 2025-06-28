<html>
    <head>
        <title>DeleteEmp </title> </head>

<body>
    <center>
      <form method = post action="DeleteEmp.php">
        <table border='1'>

          <tr>
             <th>Employee ID For Delete </th>
             <td> <input type="text" name="txtid"> </td>
          </tr>

          <tr>
             <th> </th>
             <td> <input type=submit value=Search name=submitbtn> </td>
          </tr>

        </table>
</form>
     <?php
     if(isset($_POST['submitbtn']))

     {
        $eid=  $_POST['txtid'];

         $mycon=mysqli_connect("localhost","root","Ayesha@2003","phpdatabase");
       $sql= "select * from emp1  where empid=".$eid;
       $record= $mycon->query($sql);
       $n=  mysqli_num_rows($record);

       if($n>0){
         session_start();
         $_SESSION['$empid']=$eid;

        echo "<table border='1'>";
        echo "<tr><th>Emp Id</th> <th>Emp Name</th> <th>Emp Salary</th></tr>";
while($row = mysqli_fetch_row($record)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";

    echo "<form method=post action=deletedata.php>";

    echo "<td> <input type=submit value=Delete></td>";

    echo "</form>";

    echo "</tr>";
}
      echo "</table>";
       }
       else{
        echo" No Record Found";
       }
     }

     ?>

    </center>


</body>
