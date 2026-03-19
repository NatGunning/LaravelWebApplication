import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors:true,
        hmr: {
            host: "scaling-space-enigma-v455g54grgjcwrrg-5173.app.github.dev",
            clientPort: 443,
            protocol: 'wws',
        },
    }
});