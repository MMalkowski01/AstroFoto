<?php
// wyświetlanie typu pliku
echo $_FILES['nazwa_pliku']['type']. "<br>";
// wyświetlanie rozmiaru
echo $_FILES['nazwa_pliku']['size']. "<br>";
// wyświetlanie nazwy pliku
echo $_FILES['nazwa_pliku']['name']. "<br>";
// wyświetlanie nazwy tymczasowej
echo $_FILES['nazwa_pliku']['tmp_name']. "<br>";
// wyświetlanie ewentualnych błędów
echo $_FILES['nazwa_pliku']['error']. "<br>" ;
?>

<?php
echo "dziala 1". $_FILES['nazwa_pliku']['name'];
?>


<?php
function sprawdz_typ()
{
  if ($_FILES['nazwa_pliku']['type'] != 'image/jpeg')
    return false; 
  return true;
}
?>

<?php
function zapisz_plik()
{
$lokalizacja = '//home//ziedab//www/Pictures//'.$_FILES['nazwa_pliku']['name'].'';
if(is_uploaded_file($_FILES['nazwa_pliku']['tmp_name']))
{
if(!move_uploaded_file($_FILES['nazwa_pliku']['tmp_name'], $lokalizacja))
{
echo 'problem: Nie udało się skopiować pliku do katalogu.';
return false;
}
}
else
{
echo 'problem: Możliwy atak podczas przesyłania pliku.';
echo 'Plik nie został zapisany.';
return false;
}
return true;
}
?>



<?php 
  sprawdz_typ();
  echo "</br>";
  zapisz_plik();
  ?>

<?php
$old_path = getcwd();
chdir('/home/ziedab/www');
$output = shell_exec('./script_convert.bash');
chdir($old_path);
  ?>

<?php
  $local = "Pictures/".$_FILES['nazwa_pliku']['name'].'' ;
  $thumb = "Thumbnails/".$_FILES['nazwa_pliku']['name'].'' ;
  echo "</br>";
  echo 'lokalizacja'. "</br>";
  echo $local. "</br>";
  echo $thumb. "</br>"; 
  echo "</br>";
?>  
  
<?php
$servername = "localhost";
$username = "ziedab";
$password = "bruteforce";
$dbname = "ziedab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO AstroFoto_Test (link, thumbnail, uzytkownik, Opis)
  VALUES ('".$local."','". $thumb."','','')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      ?>