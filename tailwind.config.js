const defaultTheme = require('tailwindcss/defaultTheme');


/** @type {import('tailwindcss').Config} */
module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./resources/**/*.js",
    ],

    theme: {
        darkMode: 'class',
        hover: 'class',
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
          }, fontFamily: {
            body: ['Inter', 'sans-serif'],
            },
            colors: {
                lightBeige : '#EEEEEE',
                lightGreen : '#32E0C4',
                lightDarkGreen : '#0D7377',
                lightBlack : '#212121',
                darkBeige : '#EEEEEE',
                darkGreen : '#32E0C4',
                darkGrayBlue : '#393E46',
                darkBlack : '#222831',

            }
    },
    plugins: [require('@tailwindcss/forms')],
};
