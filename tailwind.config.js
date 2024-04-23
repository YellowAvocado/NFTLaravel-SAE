const defaultTheme = require('tailwindcss/defaultTheme');


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/js/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/dashboard.blade.php',
        './resources/views/guest.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'yellowy': '#F3BD31',
            },
            fontFamily: {
/*
                sans: ['"Cambay"', ...defaultTheme.fontFamily.sans],
*/
                cambay: ['Cambay', ...defaultTheme.fontFamily.sans],

            },
        },
    },

    plugins: [require('@tailwindcss/forms')],

    darkMode: "class",
};
