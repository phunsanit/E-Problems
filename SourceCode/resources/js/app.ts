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
import { format } from 'date-fns';
import { enUS as getLocale } from 'date-fns/locale';
const DATETIME_PATTERNS = 'yyyy-MM-dd HH:mm:ss';

window.DATETIME_PATTERNS = DATETIME_PATTERNS;
window.format = format;
import { formatWithOptions } from 'date-fns/fp';
window.formatWithOptions = formatWithOptions;
window.getLocale = getLocale;

//Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

//jQuery
import './jquery';

//Vue.js
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { ZiggyVue } from 'ziggy-js';

// import component
import LocaleDateString from './Components/LocaleDateString.vue';

let el = document.getElementById('app');

let app; // Declare app variable

if (el) { //inertiajs
    createInertiaApp({
        resolve: name => import(`./Pages/${name}`),
        setup({ el, App, props, plugin }) {
            app = createApp({ render: () => h(App, props) })

                .use(plugin)
                .use(ZiggyVue)
        },
    });
} else {
    el = document.getElementById('appModule');
    app = createApp({})// different from createInertiaApp
}

//common components for all pages
if (app && el) {
    app.component('LocaleDateString', LocaleDateString)

        .mount(el);
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