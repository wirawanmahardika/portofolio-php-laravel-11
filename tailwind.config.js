import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                cinzel: "'Cinzel', serif",
                quicksand: "'Quicksand', sans-serif",
                "josefin-sans": "'Josefin Sans', sans-serif",
                jost: '"Jost", serif',
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                // roboto: "'Roboto', sans-serif",
                // raleway: "'Raleway', sans-serif",
                // geologica: "'Geologica', sans-serif",
                // dancingScript: "'Dancing Script', cursive",
            },
            colors: {
                bgBlack: "#08080C",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
