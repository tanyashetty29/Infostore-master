<?php
session_start();
$email = $_SESSION['email'];
include './db.php';
if (!empty($_POST['idName']) && !empty($_FILES['idPhoto'])) {
    $idName = mysqli_real_escape_string($connect, $_POST['idName']);
    //image processing
    $img_name =  $_FILES['idPhoto']['name'];
    $img_size =  $_FILES['idPhoto']['size'];
    $tmp_name =  $_FILES['idPhoto']['tmp_name'];
    $error = $_FILES['idPhoto']['error'];
    if ($error === 0) {
        if ($img_size > 125000) {
            header("Location:../idCards.php?error=size%20is%20too%20large");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png', 'jfif', 'webp');
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../images/id/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                // $query = "SELECT idlogin from login where email='$email'";
                // $id = mysqli_query($connect, $query);
                // $idValue = mysqli_fetch_assoc($id);
                $id = "SELECT * from login where email='$email'";
                $lo = mysqli_query($connect, $id);
                while ($temp = mysqli_fetch_assoc($lo)) {
                    $low = $temp['idlogin'];
                }
                $query1 = "INSERT INTO certificates(id, cname, img) VALUES('$low','$idName','$new_img_name')";
                mysqli_query($connect, $query1);
                header("Location:../idCards.php?error=Information%20Added%20Successfully");
            } else {
                header("Location:../idCards.php?error=Image%20Type%20is%20not%20Convinient");
            }
        }
    } else {
        //unknown error
        header("Location:../idCards.php?error=Unknown%20Error%20Occured");
    }
}
