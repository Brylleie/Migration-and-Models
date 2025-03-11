/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./storage/framework/views/*.php", // Include compiled views
      "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php", // Pagination styles
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  };
  