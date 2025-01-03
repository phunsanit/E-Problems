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
import { createApp, h, type DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from 'ziggy-js';

const el = document.getElementById('app');

let app; // ประกาศตัวแปร vueApp

if (el) {
    app = createApp({ // กำหนดค่า vueApp
        el,
        inertiaApp: createInertiaApp({
            resolve: (name): Promise<DefineComponent> => {
                const pages = import.meta.glob<DefineComponent>('./Pages/**/*.vue')
                return pages[`./Pages/${name}.vue`]()
            },
            setup({ el, App, props, plugin }: { el: Element, App: any, props: any, plugin: any }) {
                return createApp({ render: () => h(App, props) })
                    .use(plugin)
                    .use(ZiggyVue);
            },
        }),
    });
} else {
    app = createApp({ // กำหนดค่า vueApp
        el: '#appModule',
        App: {
            // ...
        },
        props: {},
        plugin: {},
    });
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