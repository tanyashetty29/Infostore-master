<?php
session_start();
$email = $_SESSION['email'];
include './db.php';
if (!empty($_POST['wname']) && !empty($_POST['email']) && !empty($_POST['uname']) && !empty($_POST['password'])) {
    $wname = mysqli_real_escape_string($connect, $_POST['wname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $uname = mysqli_real_escape_string($connect, $_POST['uname']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $id = "SELECT * from login where email='$email'";
    $lo = mysqli_query($connect, $id);
    while ($temp = mysqli_fetch_assoc($lo)) {
        $low = $temp['idlogin'];
    }
    $query = "INSERT INTO eandp(id,webname,email,username,password) VALUES('$low','$wname','$email','$uname','$password')";
    mysqli_query($connect, $query);
    header("Location:../passwordStore.php?error=Fields%20Added%20Successfully");
}
