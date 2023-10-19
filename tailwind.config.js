/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    opacity: {

        '15': '0.15',

        '35': '0.35',

        '65': '0.65',
       },
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "bg-slate-900": "rgb(15 23 42)",
                'primary': '#3490dc',
                'danger': '#e3342f',
                'secondary': '#ffed4a',
            },
        },
        backgroundColor: theme => ({

            ...theme('colors'),
     
            'primary': '#3490dc',
     
            'secondary': '#ffed4a',
     
            'danger': '#e3342f',
           }),
    },

    plugins: [require("@tailwindcss/forms")],
};
