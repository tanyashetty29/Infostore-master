<?php include 'db.php' ?> 
<?php
$count = 0;
if (!empty($_GET['email']) && !empty($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $query = "SELECT * FROM registration";
    $log = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($log)) {
        if ($email == $row['email']) {
            $count += 1;
            if ($password == $row['password']) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $row['email'];
                header("Location:../personnal.php");
            } else {
                header('Location:../index.php?error=Enter%20Correct%20Password');
            }
        }
    }
} else {
    header("Location:../index.php?error=Enter%20All%20Fields");
}
if ($count == 0) {
    header("Location:../index.php?error=Email%20Not%20Found");
}
?>