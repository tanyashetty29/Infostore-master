<?php
session_start();
$email = $_SESSION['email'];
include './db.php';
if (!empty($_POST['name']) && !empty($_POST['dob']) && !empty($_POST['height']) && !empty($_POST['weight']) && !empty($_POST['blood']) && !empty($_POST['sslc']) && !empty($_POST['puc']) && !empty($_POST['qualification']) && !empty($_POST['address']) && !empty($_POST['gender'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $dob = mysqli_real_escape_string($connect, $_POST['dob']);
    $height = mysqli_real_escape_string($connect, $_POST['height']);
    $weight = mysqli_real_escape_string($connect, $_POST['weight']);
    $blood = mysqli_real_escape_string($connect, $_POST['blood']);
    $sslc = mysqli_real_escape_string($connect, $_POST['sslc']);
    $puc = mysqli_real_escape_string($connect, $_POST['puc']);
    $qualification = mysqli_real_escape_string($connect, $_POST['qualification']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);

    //image processing
    $img_name =  $_FILES['img']['name'];
    $img_size =  $_FILES['img']['size'];
    $tmp_name =  $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];
    if ($error === 0) {
        if ($img_size > 125000) {
            header("Location:../personalForm.php?error=size%20is%20too%20large&email=" . $email);
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png', 'jfif', 'webp');
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../images/personnal/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $query = "UPDATE personal SET name='$name',dob='$dob',gender='$gender',height='$height',weight='$weight',permanent='$address',blood='$blood',sslc='$sslc',puc='$puc',qualification='$qualification',img='$new_img_name' where id=(select idlogin FROM login where email='$email')";
                mysqli_query($connect, $query);
                header("Location:../personnal.php?error=Information%20Added%20Successfully&email=" . $email);
            } else {
                header("Location:../personalForm.php?error=Image%20Type%20is%20not%20Convinient&email=" . $email);
            }
        }
    } else {
        //unknown error
        header("Location:../personalForm.php?error=Unknown%20Error%20Occured&email=" . $email);
    }
}
