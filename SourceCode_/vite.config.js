import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        commonjsOptions: {
            transformMixedEsModules: true,
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.ts'// Update to .ts
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});