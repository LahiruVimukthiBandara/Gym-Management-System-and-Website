/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  
  darkMode: "class",
  
  theme: {
    extend: {
      fontFamily: {
        poppins: ['poppins']
      },
      backgroundImage: {
        'contact-bg': "url('/public/contact5.jpg')",
      }
    },

  },
  plugins: [require("daisyui")],

}