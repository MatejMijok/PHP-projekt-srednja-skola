<html>
<head>
<title>Lijekovi</title>
</head>
<body>
<center>
<h2>Dodaj podatak</h2>
<a href="index.php"><input type="button" value="Pocetna"></a>
<a href="login.php"><input type="button" value="Prijava"></a>
<a href="register.php"><input type="button" value="Registriraj se"></a>
</center>
<?php 
include('logina.php');
if(isset($_SESSION['login_user']))
{
    echo "<center><a href='logout.php'><input type='button' value='Odjavi se'></a></center>";
}
?>
<center>
<form action="dodaja.php" method=POST>
Naziv: <input type="text" name="naziv"><br>
Vrsta: <input type="text" name="vrsta"><br>
Proizvodac: <input type="text" name="proizvodac"><br>
Doziranje: <input type="text" name="doziranje"><br>
Godine: <input type="text" name="godine"><br>
<input type="submit" value="Posalji"> </form>
</body>
</center>
</html>