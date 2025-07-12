import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js', // If using dynamic classes in JS
        './resources/css/app.css' // If using Tailwind directives
    ],
    theme: {
            extend: {
                colors: {
                    'wabag-black': '#000000',
                    'wabag-yellow': '#FFD700',
                    'wabag-green': '#1A4314',
                    'wabag-white': '#FFFFFF',
                    'wabag-light': '#F8F8F8',
                },
                fontFamily: {
                    sans: ['Poppins', 'sans-serif'],
                    serif: ['Roboto', 'sans-serif'],
                },
                backgroundImage: {
                    'flag-pattern': "url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFD700' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')",
                }
            }
        },

    plugins: [forms],
};
