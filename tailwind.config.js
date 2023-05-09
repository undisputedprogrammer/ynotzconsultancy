const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2lg': '1140px',

            'xlg' : '1210px',

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                satoshibold: ['font-satoshibold'],
                satoshimedium: ['font-satoshimedium'],
                satoshiregular: ['font-satoshiregular'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
