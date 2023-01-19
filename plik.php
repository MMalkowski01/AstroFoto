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
$lokalizacja = '/home/ziedab/www/Pictures/'.$_FILES['nazwa_pliku']['name'].'';
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