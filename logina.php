<?php
session_start();
if (isset($_POST['username'])) {
    if (empty($_POST['username']) || empty ($_POST['password'])) {
        echo "Korisničko ili lozinka su netocni";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $conn = mysqli_connect("localhost","root","","lijek");
        $query = mysqli_query($conn,"select * from login where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username;
            header("location: index.php");
        } else {
            echo "Korisničko ime ili lozinka su netocni";
        }
        mysqli_close($conn);
    }
}
?>