import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Pastikan file ini ada di resources/css
                'resources/js/app.js'     // Pastikan file ini ada di resources/js
            ],
            refresh: true,
        }),
    ],
});
