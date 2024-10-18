import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/styles/styles.scss',
                'resources/js/app.js',
                'resources/js/historical.js',
                'resources/js/data.js',
                'resources/js/wallet.js'
            ],
            refresh: true,
        }),
    ],
});
