/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                dark: "#161C24",
                light: "#F9FAFB",
                white: "#FFFFFF",
                success: "#8FB02B",
                error: "#EE5252",
                danger: "#EE5252",
                warning: "#F5CC3C",
                info: "#47C5DF",
            },
        },
    },
    daisyui: { themes: ["light"] },
    plugins: [require("daisyui")],
    darkMode: "media",
};
