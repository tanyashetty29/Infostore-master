<?php
if (isset($_GET['success'])) {
  echo "<script>alert('" . $_GET['success'] . "')</script>";
}
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
  <title>InfoStore</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>

<body>
  <nav>
    <div class="my-6 flex justify-between pb-4 border-b border-littleDarkOrange">
      <div class="ml-16 -mt-4">
        <img src="./images/logo.png" width="200" alt="" />
      </div>
      <div class="">
        <div class="mr-16 text-xl cursor-pointer sm:hidden">
          <i class="bi bi-list" id="menu" onclick="openMenu()"></i>
        </div>
        <ul class="mr-10 hidden sm:flex" id="navmenu">
          <li class="px-4 font-nunito hover:text-littleDarkOrange">
            <a href="">Home</a>
          </li>
          <li class="px-4 font-nunito hover:text-littleDarkOrange">
            <a href="">About</a>
          </li>
          <li class="px-4 font-nunito hover:text-littleDarkOrange">
            <a href="registration.php">Register</a>
          </li>
          <button class="px-4 btn font-nunito hover:bg-littleDarkOrange" onclick="loginFun()" id="loginbtn">
            Login
          </button>
        </ul>

        <!--modal menu-->
        <ul class="flex-col space-y-0 hidden" id="navmenusm">
          <li class="font-nunito hover:text-littleDarkOrange">
            <a href="">Home</a>
          </li>
          <li class="font-nunito hover:text-littleDarkOrange">
            <a href="registration.php">Register</a>
          </li>
          <li class="font-nunito">
            <button class="btn hover:bg-littleDarkOrange" onclick="loginFun()" id="smloginbtn">
              Login
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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
      </div>
      <div class="flex justify-between items-center w-100 border-t p-3">
        <h5 class="text-lg ml-10">Don't have an account?</h5>
        <button class="bg-red-600 rounded px-3 py-1 text-white hover:bg-red-700 mr-10" id="btnlogin">
          <a href="registration.php"> Sign Up</a>
        </button>
      </div>
    </div>
  </div>

  <div class="my-10 sm:flex">
    <!--Info-->
    <div class="my-10 mx-40 lg:w-1/2 text-center lg:text-left space-y-4">
      <h1 class="text-4xl">InfoStore</h1>
      <p class="space-y-2 mb-32 text-lg">
        I know it's very difficult to store each and every information. Here
        we provide different sections to store your information.
      </p>

    </div>
    <!--Logo-->
    <div class="hidden lg:w-1/2 lg:block">
      <img src="./images/onemain.jpg" width="500" alt="" />
    </div>
  </div>
  </section>

  <!---->
  <section class="flex justify-center bg-littleDarkOrange">
    <div class="p-4 flex font-nunito rounded-t-md">
      <!--div for contact page-->
      <div class="w-2/3">
        <div>
          <label class="block mx-48 my-1" for="name">Name</label>
          <input class="block mx-48 my-1 p-2 border border-gray-500 rounded focus:outline-none" type="text" placeholder="Enter your Name..." />
          <label class="block mx-48 my-1" for="phone">Phone Number</label>
          <input class="block mx-48 my-1 p-2 border border-gray-500 rounded focus:outline-none" type="text" placeholder="Phone Number..." />
          <label class="block mx-48 my-1" for="message">Enter your message</label>
          <textarea class="mx-48 my-1 p-2 border border-gray-500 rounded hidden lg:block focus:outline-none" name="msg" id="msg" cols="50" rows="2" placeholder="Write something..."></textarea>
          <textarea class="mx-48 my-1 p-2 border border-gray-500 rounded block lg:hidden focus:outline-none" name="" id="" cols="30" rows="5"></textarea>
          <button class="bg-gray-300 w-[150px] mx-48 my-1 py-2 px-4 rounded-lg hover:bg-gray-500">
            <a href="mailto:dpraidola@gmail.com">Send</a>
          </button>
        </div>
      </div>
      <!--div for image-->
      <div class="w-1/3 hidden lg:flex">
        <img src="./images/main.jpg" alt="" />
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