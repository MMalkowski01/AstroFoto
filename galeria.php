


<?php

$link =mysql_connect('localhost','ziedab','bruteforce')
 or die('Could not connect: ' . mysql_error($link));
 
 $query='SET NAMES utf8';
 $result = mysql_query($query);
 
 mysql_select_db('ziedab', $link)
 or die("");
?>

<html lang="pl" lang="pl">


<head>


 <title> AstroFoto </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  
   <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"> 
    </head>    


    <body bgcolor=black text=white>
    <center>
    <span id="picture"></span>
    </center>


<div>
 
<?php
 $query='SELECT * FROM AstroFoto_Test' ;  
 $result =mysql_query($query, $link)or die ('Query failed:'. mysql_error($link));
   
 while ($row = mysql_fetch_array($result , MYSQL_ASSOC )){
 $text =$row[thumbnail];
 echo $text.'<br>';
 echo "<img src=\"$text\" alt=\"Tekst alternatywny\" width=\"200\" height=\"200\" >" ;
 }
 mysql_free_result($result);
 ?>

                        
    </div>          
    

<?php
$dir_path = "Thumbnails/";
$extensions_array = array('jpg','png','jpeg');
$numCol = 8;
if(is_dir($dir_path))
{
    $files = scandir($dir_path);
       for($i = 0; $i < count($files); $i++)
        {
       $n = 0;
          echo '<table>';
          echo '<tr>';
           if($files[$i] !='.' && $files[$i] !='..')
           {
          $n ++;
                                                 
          // get file name
            echo "<td>File Name: $files[$i]<br>";
              // get file extension
               $file = pathinfo($files[$i]);
            $extension = $file['extension'];
           // show image
         echo "<img src='$dir_path$files[$i]' style='width:60px;height:80px;'></td>";
                   
               if($n % $numCol == 0) echo "</tr><tr>";
     }
    echo '</tr>';
   echo '</table>';
   }
 }
?>                                                                                                                                                                                            
<body>
  </head>