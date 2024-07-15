function openMenu() {
  const btn = document.getElementById("menu");
  const navmenu = document.getElementById("navmenu");
  const navmenu_sm = document.getElementById("navmenusm");
  btn.addEventListener("click", changeBtn);
  function changeBtn() {
    if (btn.className == "bi bi-list") {
      btn.className = "bi bi-x-lg";
      navmenu_sm.className = "flex-col sm:hidden";
    } else {
      btn.className = "bi bi-list";
      navmenu_sm.className = "hidden";
    }
  }
}
function loginFun() {
  const loginmodal = document.getElementById("modallogin");
  const login = document.getElementById("loginbtn");
  const closebtn = document.getElementById("closebtn");
  const smlogin = document.getElementById("smloginbtn");
  const btnlogin = document.getElementById("btnlogin");
  smlogin.addEventListener("click", showModal);
  login.addEventListener("click", showModal);
  closebtn.addEventListener("click", closeModal);
  btnlogin.addEventListener("click", function () {
    window.location = "./registration.php";
  });
  function showModal() {
    loginmodal.className =
      "h-screen flex w-full pt-20 justify-end items-start bg-black bg-opacity-50 fixed left-0 top-0";
  }
  function closeModal() {
    loginmodal.className = "hidden";
  }
}
