<?php 
$conn=mysqli_connect("localhost","root","");

$rez=mysqli_query($conn,"create database lijek");

$conn=mysqli_connect("localhost","root","","lijek");
$unos=mysqli_query($conn, "create table lijekovi(id INT AUTO_INCREMENT PRIMARY KEY, Naziv TINYTEXT, Vrsta TINYTEXT, Proizvodac TINYTEXT, Doziranje INT, Godine INT)");

echo "Tablica uspješno napravljena!";

$rez=mysqli_query($conn, "CREATE TABLE login(
   username VARCHAR(25) PRIMARY KEY,
   password VARCHAR(25) not null)");

$rez=mysqli_query($conn, "insert into login(username,password) values ('admin','admin');");
?>
