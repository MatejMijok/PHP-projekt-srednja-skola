<html>
<head>
<title>Lijekovi</title>
</head>
<body>
<center>
<h2>Registracija</h2>
<form action="" method="post">
<br>
<label>Username:</label>
<input type="text" name="username" placeholder="username">
<label><br>Password:</label>
<input type="password" name="password" placeholder="**********"><br>
<br>
<input type="submit" name="submit" value="Register">
<a href="index.php"><input name="button" type="button" value="Odustani"></a>
</form>
<?php 
include('registera.php');
if(isset($_SESSION['login_user'])) {header("location: index.php");}
?>
</center>
</body>
</html>