/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./assets/js/**/*.js", "./templates/**/*.{php, html}", "*.{php, html}"],
    theme: {
        extend: {
            colors: {
                'color-blue': "#0032A0",
                'color-red': "#BF0D3E",
                'color-yellow': "#FED141",
                'color-orange': "#FFC107",
                'color-peach': "#F5CBB7",
                'color-pink': "#E77E9B",
                'color-brown': {
                    'light': "#BBA686",
                    DEFAULT: "#4F2D20"
                },
                'color-green': "#346830"
            },
            fontSize: {
                'h1': '70px',
                'h2': '40px',
                'h3': '36px',
                'h4': '32px',
                'h5': '28px',
                'h6': '24px',
                'p': '20px'
            }
        },
        container: {
            center: true
        }
    },
    plugins: [],
}