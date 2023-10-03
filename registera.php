<?php 
if(isset($_POST['submit'])){
    if(empty($_POST['username'])||empty($_POST['password'])){
        echo "Korisničko ime ili lozinka su prazni";
    }
else{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","lijek");
    $query=mysqli_query($conn, "INSERT INTO login(username, password) VALUES('$username','$password')");
    mysqli_close($conn);
    header("location: login.php");
 }
}
?>