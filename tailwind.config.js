import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            fontFamily: {
                'hanken-grotesk': ["Hanken Grotesk", "sans-serif"]
            },
            colors: {
                "ibrohim": "rgb(250, 0, 0)", //the function of extend is to add custom styling you will need
                "dardaa": "rgba(250, 171, 0, 0.87)" //the function of extend is to add custom styling you will need
            }
        },
    },
    plugins: [],
};
