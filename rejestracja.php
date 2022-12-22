 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 
 
 <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 
  </head>
  <?php
 	$login=$_GET[login];
        $haslo=$_GET[haslo]; 
	$kolor=$_GET[kolor];
  ?>
  
  
  <body bgcolor=black text=white>
<left>  
	Profil <br>
  	<span id ="picture"></span>
  	<form action="rejestracja.php" method="get">
		<input type="text" name="nazwa uzytkownika" value="nazwa uzytkownika"><br>

  		<input type="text" name="login" value="login"><br>
  		
                <input type="text" name="haslo" value=haslo><br>
                
                <input type="submit" value="Zarejestruj sie">
       </form>
	<form action="logowanie.php" method="POST">
		<input type = "submit" value="Cofnij">
	</form>
      <?php
$link =mysql_connect('localhost','micmal','astro')or die('Could not connect: ' .mysql_error($link));
      
      $query='SET NAMES utf8';
      $result =mysql_query($query);
mysql_select_db('micmal',$link) or die('Could not select database');
?> 
<?php 
$query='SELECT * FROM SpisStudentow';
$result =mysql_query($query,$link)or die('Query failed:' .mysql_error($link));
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
      $dane=$row[$kolumna];
      echo $dane;
      echo '<br>';
}
mysql_free_result($result);
?>
  	          
</left>

  </body>
  </html>
