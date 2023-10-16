import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';
import react from '@vitejs/plugin-react';

export default defineConfig({
    // resolve: {
    //     alias: {
    //         '~bootstrap': './node_modules/bootstrap', '$': 'jQuery'
    //     }
    // },
    plugins: [
        inject({
            $: 'jquery', jQuery: 'jquery', 'window.jQuery': 'jquery'
        }),
        laravel({
            input: ['resources/scss/public.scss',
                'resources/js/public.js',
                'resources/js/admin-panel.js',
                'resources/js/manager-panel.js',
                'resources/js/technology-seeker-panel.js',
                'resources/js/technology-provider-panel.js',
                'resources/js/advisor-panel.js',
            ],
            refresh: true,
        }),
        react(),
    ],
    css: {
        postCss: {
            plugins: {
                tailwindcss: {},
                autoprefixer: {},
            },
        },
    },
    build: {},
});
