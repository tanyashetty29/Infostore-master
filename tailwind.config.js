/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.php",
    "./public/registration.php",
    "./public/personnal.php",
    "./public/registration.php",
    "./public/idCards.php",
    "./public/passwordStore.php",
  ],
  theme: {
    extend: {
      colors: {
        lightOrange: "#ffb366",
        littleDarkOrange: "#ff751a",
        darkGray: "#2E2E2E",
      },
      fontFamily: {
        nunito: "Nunito",
      },
    },
  },
  plugins: [],
};
