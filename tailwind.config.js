const defaultTheme = require('tailwindcss/defaultTheme');


/** @type {import('tailwindcss').Config} */
module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./resources/**/*.js",
    ],

    theme: {
        
            colors: {
                lightBeige : '#EEEEEE',
                lightGreen : '#32E0C4',
                lightDarkGreen : '#0D7377',
                lightBlack : '#212121',
                darkBeige : '#EEEEEE',
                darkGreen : '#32E0C4',
                darkGrayBlue : '#393E46',
                darkBlack : '#222831',

            },
            font: {
                body: ['Poppins', 'sans-serif'],
                },
                screens: {
                    sm: ['min-[100px]', 'max-[768px]'],
                    md: ['min-[768px]', 'max-[976px]'],
                    lg: ['min-[976px]', 'max-[1440px]'],
                    xl: ['min-[1440px]', 'max-[2000px]'],
                  }, 
    },
    plugins: [require('@tailwindcss/forms')],
};
