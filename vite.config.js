import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/styles.css",
                "resources/css/sabrinaStyles.css",
                "resources/css/utsstylesheet.css",
                "resources/js/uts.js",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
