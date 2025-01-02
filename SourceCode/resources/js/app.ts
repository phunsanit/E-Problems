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
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { DefineComponent } from 'vue';
import { createVueApp } from './vue'; // Import the createVueApp function

import DatetimeText from '@/Components/DatetimeText.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
    ),
    setup({ el, App, props, plugin }) {
        createVueApp(el as HTMLElement, App, props, plugin); // Call the createVueApp function

        App.component('DatetimeText', DatetimeText);

    },
    progress: {
        color: '#4B5563',
    },
});

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