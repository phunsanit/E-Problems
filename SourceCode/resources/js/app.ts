//config variables
const datetimeOptions = {
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    month: 'short',
    year: 'numeric'
};
window.datetimeOptions = datetimeOptions;

const locales = (navigator.languages && navigator.languages.length) ? navigator.languages : navigator.language || 'en';
window.locales = locales;

import '../css/app.css';
import './bootstrap';

//date-fns
import { DATETIME_PATTERNS, format, formatWithOptions, getLocale } from './date-fns';

window.DATETIME_PATTERNS = DATETIME_PATTERNS;
window.format = format;
window.formatWithOptions = formatWithOptions;
window.getLocale = getLocale;

//Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

//jQuery
import './jquery';

//Vue.js
import { createApp, DefineComponent, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Vue.js Components
import 'datatables.net-dt';
import 'datatables.net';
import DataTable from 'datatables.net-vue3'; 
import DatetimeText from './Components/DatetimeText.vue';
import Modal from './Components/Modal.vue';
import NavLinks from './Components/NavLink.vue';

const app = createApp({
    components: {
        DatetimeText,
    },
});

// Mount the app to the #appSPA element if it exists (for SPA pages)
const el = document.getElementById('appSPA');
if (el) {
  createInertiaApp({
    resolve: async (name): Promise<DefineComponent> => {
      const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));
      return page as DefineComponent;
    },
    setup({ el, App, props, plugin }) {
      app.use(plugin)
         .use(DataTable) 
         .mount(el); 
    },
  });
} else {
  app.mount('#appModule');
}

// global variables
declare global {
    interface Window {
        DATETIME_PATTERNS: typeof DATETIME_PATTERNS;
        format: typeof format;
        formatWithOptions: typeof formatWithOptions;
        getLocale: typeof getLocale;
        locales: typeof locales;
        datetimeOptions: typeof datetimeOptions;
    }
}