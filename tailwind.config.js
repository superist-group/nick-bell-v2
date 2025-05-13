/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/*.{php,js}",
    "./template-blocks/*.{php,js}",
    "./components/*.{php,js}",
    "./*.{php,js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
