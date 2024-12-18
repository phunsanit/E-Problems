import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import App from './App.vue';
import $ from 'jquery';
window.jQuery = window.$ = $;
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import DataTable from 'datatables.net-vue3';
import 'datatables.net-dt/css/jquery.dataTables.min.css';
import $ from 'jquery';
window.jQuery = window.$ = $;

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    progress: {
        color: '#4B5563',
    },
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const appInstance = createApp({ render: () => h(App, props) });
        appInstance
            .use(plugin)
                .mount(el);
            appInstance.component('DataTables', DataTables);

            appInstance.mount(el);
            return appInstance;
    },
    title: (title) => `${title} - ${appName}`,
});