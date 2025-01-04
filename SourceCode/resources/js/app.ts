//config variables
const datetimeOptions = {
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    month: 'short',
    year: 'numeric'
};
window.datetimeOptions = datetimeOptions;

const userLocales = (navigator.languages && navigator.languages.length) ? navigator.languages : navigator.language || 'en';
window.userLocales = userLocales;

// global variables
declare global {
    interface Window {
        datetimeOptions: typeof datetimeOptions;
        userLocales: typeof userLocales;
    }
}

import '../css/app.css';
import './bootstrap';

//date-fns
import {
    DATETIME_PATTERNS,
    format,
    formatDistance,
    formatWithOptions,
    getLocale,
    locales,
    subDays
} from './date-fns';

window.DATETIME_PATTERNS = DATETIME_PATTERNS;
window.format = format;
window.formatDistance = formatDistance;
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
import LocaleDate from './Components/LocaleDate.vue';
import LocaleTime from './Components/LocaleTime.vue';

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
    app
        .component('LocaleDate', LocaleDate)
        .component('LocaleTime', LocaleTime)

        .mount(el);
}