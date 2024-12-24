import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name.endsWith('.woff2') || assetInfo.name.endsWith('.ttf')) {
                        return 'fonts/[name][extname]';
                    }
                    return 'assets/[name]-[hash][extname]';
                },
            },
        },
    },
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true // Suppress deprecation warnings
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // SCSS file to compile into CSS
                'resources/js/app.ts',    // TypeScript file
            ],
            refresh: true,              // Enables live reloading
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
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});