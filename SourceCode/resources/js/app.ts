import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import App from './App.vue';
import $ from 'jquery';
window.jQuery = window.$ = $;
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import Modal from './Components/Modal.vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import DataTable from 'datatables.net-vue3';
import 'datatables.net-dt/css/jquery.dataTables.min.css';
import $ from 'jquery';
window.jQuery = window.$ = $;

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const el = document.getElementById('app');
if (!el) {
    throw new Error('Could not find element with id "app"');
}
createInertiaApp({
    progress: {
        color: '#4B5563',
    },
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app
            .use(plugin)
                .mount(el);
            app.component('DataTables', DataTables);
            app.component('Modal', Modal);

            app.mount(el);
            return app;
    },
    title: (title) => `${title} - ${appName}`,
});