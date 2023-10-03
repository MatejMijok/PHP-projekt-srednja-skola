<?php
$conn = mysqli_connect("localhost","root","","lijek");

$rezultat = mysqli_query($conn, "UPDATE lijekovi SET naziv='$_POST[naziv]', vrsta='$_POST[vrsta]', proizvodac='$_POST[proizvodac]', doziranje='$_POST[doziranje]', godine='$_POST[godine]' where ID='$_POST[id]'");


if(mysqli_affected_rows($conn) == 1)
{
    echo "<center>Promjene su unesene u bazu podataka.";
    echo "<td>
          <form action='index.php' method='post'>
          <input type='submit' name='submit' value='Pocetna'>
          </form></td></center>";
}
else
{
    echo "<center>Niste ništa promijenili";
    echo "<form action='index.php' method='post'>
          <input type='submit' name='submit' value='Pocetna'>
          </form></td></center>";
}
?>