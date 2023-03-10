/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            spacing: {
                '1px': '1px',
                '10px': '10px',
                '15px': '15px',
                '16px': '16px',
                '18px': '18px',
                '20px': '20px',
                '65px': '65px',
            },
            fontSize: {
                '24px': '24px',
            }
        },
    },
    plugins: [],
}
