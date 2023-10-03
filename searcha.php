<html>
<head>
<title>Lijekovi</title>
</head>
<body>
<center>
<h2>Administracija</h2>
<a href="dodaj.php"><input type="button" value="Dodaj"></a>
<a href="index.php"><input type="button" value="Pocetna"></a>
<a href="register.php"><input type="button" value="Registriraj se"></a>
<?php
include('logina.php');
if(isset($_SESSION['login_user']))
{
    echo "<a href='logout.php'><input type='button' value='Odjavi se'></a>";
}
?>
<br><br>
<?php 
$conn=mysqli_connect("localhost","root","","lijek");
$rezultat=mysqli_query($conn,"SELECT id, Naziv, Vrsta, Proizvodac, Doziranje, Godine FROM lijekovi WHERE Naziv LIKE '%$_POST[search]%'
OR Vrsta LIKE '%$_POST[search]%' OR Proizvodac LIKE '%$_POST[search]%' OR Doziranje LIKE '%$_POST[search]%'
OR Godine LIKE '%$_POST[search]%' order by ID desc;");

if($_POST['search']!=null)
{
    echo "<table border='1'> 
    <tr valign='top'>
    <td>Naziv</td>
    <td>Vrsta</td>
    <td>Proizvodac</td>
    <td>Doziranje</td>
    <td>Godine</td>
    </tr>";

while($redak = mysqli_fetch_array($rezultat))
{
    $id=$redak['id'];
    echo "<tr valign='top'><td>";
    echo $redak['Naziv'];
    echo "</td><td>";
    echo $redak['Vrsta'];
    echo "</td><td>";
    echo $redak['Proizvodac'];
    echo "</td><td>";
    echo $redak['Doziranje'];
    echo "</td><td>";
    echo $redak['Godine'];
    echo "</td><td>";
    echo "<a href='obrisi.php?id=$id'>Obrisi</a>";
    echo "</td><td>";
    echo "<a href='azuriraj.php?id=$id'>Promijeni</a>";
    echo "</td></tr>";
}
echo "</table>";
}

else
{
    echo "Polje za pretragu je prazno!";
}

?>
</html>