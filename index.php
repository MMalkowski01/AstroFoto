<?php
$Kolumna=$_GET[Kolumna];
?>


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


<form enctype="multipart/form-data" action="plik.php"
method="post" >
<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
<input type="file" name="nazwa_pliku" />
<input type="submit" value="wyślij" />
</form>


 

</div>

<div>

Wybierz "link | thumbnail | użytkownik "

    <br><br>
    <form action="index.php" method="get" target="strona1">
    <input type="text" name="Kolumna" value> 
    <input type="hidden" name="MAX" value=<?php echo $MAX ?> >
    <input type="hidden" name="ser" value=<?php echo $ser ?>>
    <input type="hidden" name="lang" value>
    <input type="hidden" name="strona" value="1">
    <input type="submit" value="submit">
    </form>
                                   

 
<?php
 $query='SELECT * FROM AstroFoto_Test' ;  
 $result =mysql_query($query, $link)or die ('Query failed:'. mysql_error($link));
   
 while ($row = mysql_fetch_array($result , MYSQL_ASSOC )){
 $text =$row[$Kolumna];
 echo $text.'<br>';
 echo "<img src=\"$text\" alt=\"Tekst alternatywny\" width=\"20%\" height=\"50%\" >" ;
 }
 mysql_free_result($result);
 ?>

                        
    </div>          
    
  </body>
  </head>