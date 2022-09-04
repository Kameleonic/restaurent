import { defineConfig } from 'vite';

import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
});
