import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

import { glob } from "glob";

const pages = glob.sync("resources/js/pages/**/*.js");

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/registration/form-handler.js",
                "resources/js/registration/referral.js",
                "resources/js/registration/load-studyprogram.js",
                ...pages],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
