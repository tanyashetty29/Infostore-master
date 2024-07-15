<?php
if (isset($_GET['error'])) {
    echo "<script>alert('" . $_GET['error'] . "')</script>";
}
session_start();
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Info</title>
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
    <section class="flex justify-center items-center text-lg py-2">
        <form action="./formhelp/processPersonal.php?email=<?php echo $email; ?>" class="flex justify-center md:w-[500px] bg-opacity-50" method="post" enctype="multipart/form-data">
            <div class="w-full my-6">
                <div class="text-center">
                    <h4 class="text-2xl border-b py-2">Personal Information</h4>
                </div>
                <label class="block my-2" for="name">Enter Name</label>
                <input class="block w-full my-2 px-4 py-1 rounded-md border border-gray-500  text-black font-normal focus:outline-none" type="text" name="name" placeholder="Name...">
                <label class="block my-2" for="email">Enter date of Birth</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="date" name="dob">
                <label class="block my-2" for="phone">Enter Height</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="number" name="height" placeholder="Height">
                <label class="block my-2" for="phone">Enter Weight</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="number" name="weight" placeholder="Weight">
                <label class="block my-2" for="phone">Enter Blood Group</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="text" name="blood" placeholder="Blood Group">
                <label class="block my-2" for="phone">Enter SSLC Percentage</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="number" name="sslc" placeholder="SSLC Percentage">
                <label class="block my-2" for="phone">Enter PUC Percentage</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="number" name="puc" placeholder="PUC Percentage">
                <label class="block my-2" for="phone">Enter Qualification</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="text" name="qualification" placeholder="Qualification">
                <label class="block my-2" for="phone">Enter Address</label>
                <textarea rows="3" class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" name="address"></textarea>
                <label class="block my-2" for="password">Gender</label>
                <select class="w-full  rounded-md border border-gray-500 px-4 py-1" name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
                <label class="block my-2" for="phone">Your Image</label>
                <input class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="file" name="img">


                <input class="py-2 w-full my-1 px-4 bg-lightOrange cursor-pointer rounded-md hover:bg-orange-600" type="submit" value="Register">
            </div>
        </form>

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