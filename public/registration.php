<?php
if (isset($_GET['error'])) {
    echo "<script>alert('" . $_GET['error'] . "')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Now</title>
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
                        <a href="index.php">Home</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="">About</a>
                    </li>
                    <li class="px-4 font-nunito hover:text-white">
                        <a href="registration.php">Register</a>
                    </li>
                    <button class="px-4 btn font-nunito hover:bg-white" onclick="loginFun()" id="loginbtn">
                        Login
                    </button>
                </ul>

                <!--modal menu-->
                <ul class="flex-col space-y-0 hidden md:hidden" id="navmenusm">
                    <li class="font-nunito hover:text-white">
                        <a href="">Home</a>
                    </li>
                    <li class="font-nunito hover:text-white">
                        <a href="">About</a>
                    </li>
                    <li class="font-nunito hover:text-white">
                        <a href="registration.php">Register</a>
                    </li>
                    <li class="font-nunito">
                        <button class="btn hover:bg-white" onclick="loginFun()" id="smloginbtn">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--modal for login-->
    <div class="h-screen hidden w-full pt-20 justify-end items-start bg-black bg-opacity-50 fixed left-0 top-0" id="modallogin">
        <div class="bg-white rounded shadow-xl mr-10 w-96 xl:w-1/3">
            <!--title-->
            <div class="border-b px-4 py-2 flex justify-between">
                <h3 class="text-xl font-semibold">Login</h3>
                <i onclick="loginFun()" id="closebtn" class="bi bi-x-lg cursor-pointer"></i>
            </div>
            <!--body-->
            <div class="p-3">
                <form action="./formhelp/loginHelp.php" method="get">
                    <label class="block font-nunito my-2 mx-4" for="email/username">Enter Email or Username</label>
                    <input class="block font-nunito my-2 mx-4 rounded border border-black p-1" type="text" name="email" placeholder="Username/Email" />
                    <label class="block font-nunito my-2 mx-4" for="password">Enter your Password</label>
                    <input class="block font-nunito my-2 mx-4 rounded border border-black p-1" type="password" name="password" placeholder="Password" />
                    <input type="submit" value="Login" class="cursor-pointer bg-blue-600 rounded px-3 py-1 mx-4 text-white hover:bg-blue-700" />
                </form>
                <span class="mx-4 ">Error</span>
            </div>
            <div class="flex justify-between items-center w-100 border-t p-3">
                <h5 class="text-lg ml-10">Don't have an account?</h5>
                <button class="bg-red-600 rounded px-3 py-1 text-white hover:bg-red-700 mr-10" id="btnlogin">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
    <!--Form Section-->
    <section class="flex justify-center items-center text-lg py-2">
        <form action="./formhelp/reghelp.php" class="flex justify-center md:w-[500px]" method="post" onsubmit="hello()">
            <div class="w-full my-6">
                <div class="text-center">
                    <h4 class="text-2xl border-b py-2">Registration</h4>
                </div>
                <label class="block my-2" for="name">Enter Name</label>
                <input id="name" class="block w-full my-2 px-4 py-1 rounded-md border border-gray-500  text-black font-normal focus:outline-none" type="text" name="name" placeholder="Name...">
                <label class="block my-2" for="email">Enter Email</label>
                <input id="email" class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="email" name="email" placeholder="Email...">
                <label class="block my-2" for="phone">Enter Phone Number</label>
                <input id="number" class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="text" name="phone" placeholder="Phone Number...">

                <label class="block my-2" for="password">Enter Password</label>
                <input id="password" class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="password" name="password" placeholder="Password...">
                <label class="block my-2" for="cpassword">Enter Password Again</label>
                <input id="apassword" class="block my-2 px-4 py-1 w-full rounded-md border border-gray-500 text-black font-normal focus:outline-none" type="password" name="cpassword" placeholder="Confirm Password...">
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
<script>
</script>

</html>