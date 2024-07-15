<?php
include 'db.php';

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connect, $_POST['cpassword']);
    if ($password == $cpassword) {
        $query = "INSERT INTO registration(name,email,phone,password) VALUES('$name','$email','$phone','$password')";
        $query1 = "UPDATE login SET email='$email' where idlogin=(select id from registration where email='$email') ";
        $sql = "SELECT * FROM login ";
        $log = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($log)) {
            if ($email == $row['email']) {
                header("Location:../registration.php?error=Email%20Already%20Exists");
            }
        }
        if (!mysqli_query($connect, $query)) {
            echo mysqli_error($connect);
        } else {
            header("Location:../index.php?success=Registration%20Successful");
        }
        mysqli_query($connect, $query1);
    } else {
        header("Location:../registration.php?error=Enter Correct password");
    }
} else {
    header("Location:../registration.php?error=Enter%20All%20Fields");
}
