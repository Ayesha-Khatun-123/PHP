<html>
    <head>
        <title>
             This is String Concept
</title>
</head>

<body>
    <center>
        <?php
         /* $mystring="This is free php course";
         $len= strlen($mystring);
         echo $mystring."<br>";
         echo"The length  of the string is:-".$len;*/
            
         /*$mystring="This is free php course";
         $n=str_word_count($mystring);
         echo "The word of the string is:-".$n;*/

         //string is immutable in php...main string we cannot chaneg
         //if the changes string put in another variable then print

         /*$mystring="Thisisfreephpcourse";
         $newstr= chunk_split($mystring,2,'*');
         echo "The new string is <br>".$newstr;*/


         /* $mystring="This is free php course";
          $newarr = str_split($mystring,4);
          print_r($newarr);*/

          /*$mystring="This is free php course";
          $newstr=strtoupper($mystring);
          echo"The acutal string is<br>".$mystring;
          echo" <br>The upper new string is <br>".$newstr;*/

          /*$mystring="This is free php courseThis is free php courseThis is free php course";
          $n=substr_count($mystring,"free");
          echo $n;*/

          /*$mystr="This is free php course";
          echo $mystr."<br>";
          $n=ucwords($mystr);
          echo $n;
          //ucwords,ucfirst,lcfirst*/


          $str1="Ayesha";
          $str2="Khatun";
        if(strcasecmp($str1,$str2)==0)
          echo "same";
         else
          echo "Not Same";



          

         ?>
         <center>
</body>            

        