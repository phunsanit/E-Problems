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
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import { createVueApp } from "./vue"; // Import createVueApp

const el = document.getElementById("app");

let app; // Declare app variable

if (el) {
  app = createVueApp({
    el,
    inertiaApp: createInertiaApp({
      resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue");
        return pages[`./Pages/${name}.vue`]().then((module: any) => module.default);
      },
      setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
          .use(plugin)
          .use(ZiggyVue);
      },
    }),
  });
} else {
  app = createVueApp({
    el: "#appModule",
    App: {
      // Add your components here if needed
      components: {
        // ExampleComponent,
      },
    },
    props: {},
    plugin: {}
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