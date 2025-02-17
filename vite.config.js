import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        cors: {
          origin: 'http://localhost:8000', // Or a list of origins if needed ['http://localhost:8000', 'https://example.com']
          methods: ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'], // List the HTTP methods you want to allow
          allowedHeaders: ['Content-Type', 'Authorization'], // List allowed headers
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
