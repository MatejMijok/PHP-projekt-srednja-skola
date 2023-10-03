<html>
<head>
<title>Lijekovi</title>
</head>
<body>
<center>
<h2>Pocetna</h2>
<a href="index.php"><input type="button" value="Pocetna"></a>
<a href="dodaj.php"><input type="button" value="Dodaj"></a>
<a href="admin.php"><input type="button" value="Administracija"></a>
<a href="register.php"><input type="button" value="Registriraj se"></a>
<?php 
include('logina.php');
if(isset($_SESSION['login_user'])){
    echo "<a href='logout.php'> <input type='button' value='Odjavi se'></a>";
}
else{
    echo "<a href='login.php'> <input type='button' value='Login'></a>";
}
if(isset($_SESSION['login_user'])){
    echo "<br>";
    echo "Dobrodosli ";
    echo $_SESSION['login_user'];
}
?>
<br><br>
<form action="search.php" method='POST'>
<input type="text" name="search"><input type="submit"><br>
<?php 
$conn=mysqli_connect("localhost","root","","lijek");
$rezultat=mysqli_query($conn,"SELECT id, Naziv, Vrsta, Proizvodac, Doziranje, Godine FROM lijekovi order by ID desc;");
$rezultat1=mysqli_query($conn,"SELECT id, Naziv, Vrsta, Proizvodac, Doziranje, Godine FROM lijekovi order by ID desc;");

$redak1 = mysqli_fetch_array($rezultat1);

    if(!empty($redak1['id']))
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
    echo "</td></tr>";
        }
    echo "</table>";
    }
    else
    {
        echo "Tablica nema podataka!<br> Ako želite i prijavljeni ste, možete ih upisati <a href='dodaj.php'>ovdje!</a>";
    }
?>
</center>
</body>
</html>