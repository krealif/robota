import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import postcss from 'postcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        postcss
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    build: {
        outDir: './public/assets',
        emptyOutDir: false,
        rollupOptions: {
            output: {
                entryFileNames: `js/[name].js`,
                chunkFileNames: `js/[name].js`,
                assetFileNames: `css/[name].[ext]`
            }
        },
    }
});