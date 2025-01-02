//global variables
const userLanguage = (navigator.languages && navigator.languages.length) ? navigator.languages[0] : navigator.language || 'en';

window.userLanguage = userLanguage;

import '../css/app.css';
import './bootstrap';

//date-fns
import { DATETIME_PATTERNS, formatDate, getLocale } from './date-fns';

declare global {
  interface Window {
    DATETIME_PATTERNS: typeof DATETIME_PATTERNS;
    formatDate: typeof formatDate;
    getLocale: typeof getLocale;
    userLanguage: typeof userLanguage;
  }
}

window.DATETIME_PATTERNS = DATETIME_PATTERNS;
window.formatDate = formatDate;
window.getLocale = getLocale;

//Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

//jQuery
import $ from "jquery";

declare global {
    interface Window {
        $: typeof $;
    }
}

window.$ = $;

//jQuery.DataTables.net
import 'datatables.net';
import 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
