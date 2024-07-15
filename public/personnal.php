<?php
if (isset($_GET['error'])) {
    echo "<script>alert('" . $_GET['error'] . "')</script>";
}
session_start();
$email = $_SESSION['email'];
include './formhelp/db.php';
$query = "SELECT * FROM personal where id=(SELECT idlogin FROM login where email='$email')";
$res = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>

<body>
    <nav class="bg-littleDarkOrange py-8 w-full h-[12vh]">
        <div class="flex justify-between">
            <div class="ml-16 -mt-4">
                <img src="./images/logo.png" width="200" alt="" />
            </div>
            <div class="">
                <div class="mr-16 text-xl cursor-pointer sm:hidden">
                    <i class="bi bi-list" id="menu" onclick="openMenu()"></i>
                </div>
                <ul class="mr-10 hidden sm:flex" id="navmenu">
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="personnal.php">Personal Info</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="./idCards.php?">ID cards</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="./passwordStore.php?">Email Store</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="./index.php">Logout</a>
                    </li>

                </ul>

                <!--modal menu-->

            </div>
        </div>
    </nav>

    <!--Form Section-->
    <section class=" px-32 py-1.5 bg-gray-50">
        <div class="flex justify-center items-center text-lg">
            <div class="w-[90%] mx-auto">
                <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                    <div class="grid grid-cols-3 space-x-32 px-10 py-12">
                        <div class="shadow-xl flex items-center border border-gray-300">
                            <img src="./images/personnal/<?php if ($row['img'] == NULL) {
                                                                echo 'dummy.webp';
                                                            } else echo $row['img']; ?>" class="w-full h-full object-contain" alt="profile">
                        </div>
                        <div class="col-span-2 space-y-4">
                            <div class="max-w-lg rounded overflow-hidden border border-gray-300 shadow-lg">

                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Personnal Information</div>
                                    <p class="text-gray-700 text-base">
                                        Name : <?php if ($row['name'] != NULL) echo ($row['name']);
                                                else echo '-'; ?>
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        DOB : <?php if ($row['dob'] != NULL) echo ($row['dob']);
                                                else echo '-'; ?>
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        Gender : <?php if ($row['gender'] != NULL) echo ($row['gender']);
                                                    else echo '-'; ?>
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        Height : <?php if ($row['height'] != NULL) echo ($row['height']);
                                                    else echo '-'; ?>cm &nbsp; &nbsp;Weight : <?php if ($row['weight'] != NULL) echo ($row['weight']);
                                                                                                else echo '-'; ?>kg
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        Address : <?php if ($row['permanent'] != NULL) echo ($row['permanent']);
                                                    else echo '-'; ?>
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        Blood Group : <?php if ($row['blood'] != NULL) echo ($row['blood']);
                                                        else echo '-'; ?>
                                    </p>
                                </div>
                            </div>
                            <!---Educational---->
                            <div class="max-w-lg rounded overflow-hidden border border-gray-300 shadow-lg">

                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Educational Information</div>
                                    <p class="text-gray-700 text-base">
                                        SSLC : <?php if ($row['sslc'] != NULL) echo ($row['sslc']);
                                                else echo '-'; ?>%
                                    </p>
                                    <p class="text-gray-700 text-base">
                                        PUC : <?php if ($row['puc'] != NULL) echo ($row['puc']);
                                                else echo '-'; ?>%
                                        <7 /p>
                                            <p class="text-gray-700 text-base">
                                                Qualification : <?php if ($row['qualification'] != NULL) echo ($row['qualification']);
                                                                else echo '-'; ?>
                                            </p>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--button-->
        <div class="w-full flex justify-center">
            <a class="w-[200px] py-3 border bg-lightOrange rounded-lg text-center hover:bg-littleDarkOrange duration-300" href="./personalForm.php?email=<?php echo $email; ?>" id="smloginbtn">Add/Update</a>
        </div>

    </section>
    <!--footer section-->
    <section class="flex justify-center bg-darkGray">
        <footer class="p-2 text-white">
            <div class="flex">
                <h1 class="text-4xl px-10 border-b">InfoStore</h1>
                <p class="text-sm pl-1 pt-8">Let's Store!</p>
            </div>
            <div class="py-2">
                <i class="bi bi-instagram text-2xl px-4"></i>
                <i class="bi bi-twitter text-2xl px-4"></i>
                <i class="bi bi-telephone text-2xl px-4"></i>
                <i class="bi bi-whatsapp text-2xl px-4"></i>
            </div>
        </footer>
    </section>
    <script src="./javascript/script.js"></script>
</body>

</html>