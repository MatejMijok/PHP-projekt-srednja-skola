<?php 
$conn=mysqli_connect("localhost","root","","lijek");

$rezultat = mysqli_query($conn, "DELETE FROM lijekovi WHERE id={$_GET['id']} LIMIT 1");

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

