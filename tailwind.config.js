import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontFamily: {
                Rubik: ['Rubik Doodle Shadow'],
                Protest: ['Protest Riot'],
                Paytone: ['Paytone One'],
                Oswald: ['Oswald'],
                Lexend: ['Lexend']
            }
        },
    },

    plugins: [forms],
};
