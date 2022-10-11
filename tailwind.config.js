const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: "Inter",
                body: "Inter",
            },
            container: {
                padding: {
                    DEFAULT: "1rem",
                    lg: "3rem",
                },
            extend: {
                colors: {
                    "light-primary" : "#EEEEEE",
                    "light-secondary" : "#32E0C4",
                    "light-tail-100" : "#0D7377",
                    "light-tail-500" : "#212121",
                    "dark-primary" : "#EEEEEE",
                    "dark-secondary" : "#32E0C4",
                    "dark-tail-100" : "#393E46",
                    "dark-tail-500" : "#222831",
                    accent: {
                        DEFAULT: "#FFE8FC",
                        hover:"#FFDDED",
                    },
                    paragraph: "#95ADCF",
                },
            },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
