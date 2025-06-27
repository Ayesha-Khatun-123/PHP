<html>
    <head>
        <title>
             PHP array</title>
</head>

<body>
    <center>
    <?php 
       $ar=array("Indore","Pune","Delhi");
       //print_r($ar);

       /*for($i=0;$i<count($ar);$i++){
        echo $ar[$i];
        echo"<br>";
       }*/ 

     /* $i=0;
      while($i <count($ar)){

      
             echo $ar[$i];
             echo "<br>";
       $i++;
}*/

//array contain simiilar and different data types..reverse indexing
//Associative array..

 /*$ar=array("Indore","Pune","Delhi");
 $ar1=["a"=>"Apple","b" => "Orange","c"=> "Banana"];
 print_r($ar);
 echo "<br>";
 print_r($ar1);*/


 //Array inbuild function
  
 //$ar1=array("Mon","Tue","Wed","Sat");
 //$ar2= array("Mon","Tue","Thus","Feb","Tues");
 //$ar3=array("Mon","Wed","Fri","Jan","Sat");
 //$newarr=array_intersect($ar1,$ar2);
 // $newarr =array_diff($ar2,$ar1,$ar3);

 //$ar2= array("Mon","Tue","Thu","Feb","Tue");
 //$newarr=array_unique($ar2); //remove the duplicate value provide the unique value
 //print_r($newarr)

  /*function multi($n)
  {
    return $n*5;
  }

  $ar1=array(5,10,15,20,25,30);
    $newaarr =  array_map('multi',$ar1);
    print_r($newaarr);
*/

/*function checkEvenOdd($n){
      //if($n%2==0)
       // return "even";
      //else
        return "odd";
    return($n%2==0)?"even":"odd";
}
$ar1=array(5,10,15,20,25,30);
$newaarr =  array_map('checkEvenOdd',$ar1);
//print_r($newaarr);

for($i=0;$i<count($newaarr);$i++){
    echo $newaarr[$i]." ";
}
*/
 $newarr=range(1,20,2);
 //print_r($newarr);

 for($i=0;$i<count($newarr);$i++){
    echo $newarr[$i]." ";
}


    ?>
    <center>

</body>
