/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    // require('tailwindcss-plugins/pagination')
  ],
}

// module.exports = {
//   theme: {
//     // ...
//   },
//   plugins: [
//     require('@tailwindcss/forms'),
//     // ...
//   ],
// }
