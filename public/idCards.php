<?php
session_start();
if (isset($_GET['error'])) {
    echo "<script>alert('" . $_GET['error'] . "')</script>";
}
$email = $_SESSION['email'];
include './formhelp/db.php';
$query = "SELECT * FROM certificates where id=(SELECT idlogin FROM login where email='$email')";
$res = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ID Cards</title>
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
                        <a href="./idCards.php">ID cards</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="./passwordStore.php">Email Store</a>
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
    <section class=" px-20 py-10 bg-gray-50">
        <div class="flex justify-center items-center w-full text-lg">
            <div class="grid grid-cols-3 w-full space-x-6 ">
                <div class="col-span-1 border px-6 py-4 max-h-[60vh]">

                    <div class="flex justify-center items-center h-full">

                        <form action="./formhelp/processIdCards.php?email=<?php echo $email; ?>" enctype="multipart/form-data" method="post">
                            <h2 class="text-xl font-semibold text-center">Add ID Card Details</h2>
                            <label class="block font-nunito my-2 mx-4" for="password">Enter your ID Name</label>
                            <input class="block font-nunito my-2 mx-4 rounded border border-black p-1" type="text" name="idName" placeholder="ID Name" />
                            <label class="block font-nunito my-2 mx-4" for="password">Upload your ID Photo</label>
                            <input class="block font-nunito my-2 mx-4 rounded border border-black p-1" type="file" name="idPhoto" />
                            <input type="submit" value="Add ID" class="cursor-pointer bg-lightOrange rounded px-3 py-1 mx-4 w-[150px] text-white hover:bg-littleDarkOrange duration-300" />
                        </form>
                    </div>
                </div>
                <div class="col-span-2 grid grid-cols-3">
                    <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                        <div class="h-[40vh] rounded overflow-hidden m-2 shadow-lg">
                            <img class="w-full object-contain" src="./images/id/<?php echo $row['img']; ?>" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">
                                    <?php echo $row['cname']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>
            </div>
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