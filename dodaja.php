<html>
<center>
<head>
<title>Lijekovi</title>
</head>
<body>
<a href="index.php"><input type="button" value="Pocetna"></a>
<a href="dodaj.php"><input type="button" value="Dodaj"></a>
<a href="login.php"><input type="button" value="Prijava"></a>
<?php 
include('logina.php');
if(isset($_SESSION['login_user']))
{
    echo "<center><a href='logout.php'><input type='button' value='Odjava'></a></center>";
}
?>
<br><br>
<?php 
$conn=mysqli_connect("localhost","root","","lijek");
$naziv=$_POST['naziv'];
$vrsta=$_POST['vrsta'];
$proizvodac=$_POST['proizvodac'];
$doziranje=$_POST['doziranje'];
$godine=$_POST['godine'];
if(!isset($_SESSION['login_user']))
{
    echo "Morate biti prijavljeni ako želite unositi podatke!";
}
else
{
    $upis = mysqli_query($conn, "INSERT INTO lijekovi(Naziv, Vrsta, Proizvodac, Doziranje, Godine) VALUES ('$naziv', '$vrsta', '$proizvodac', '$doziranje', '$godine')");
    if($upis)
    {
        echo "Podatak uspjesno upisan";
    }
    else
    {
        echo "Pogreska pri upisivanju podataka. Provjerite jeste li prijavljeni.";
    }
}
?>
</body>
</center>
</html>