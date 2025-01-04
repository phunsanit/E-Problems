import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { ZiggyVue } from 'ziggy-js';

// import component
import DateLocale from './Components/DateLocale.vue';
import Dropdown from './Components/Dropdown.vue';
import SelectFromJSON from './Components/SelectFromJSON.vue';
import TimeLocale from './Components/TimeLocale.vue';

document.addEventListener('DOMContentLoaded', () => {
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
            .component('date-locale', DateLocale)
            .component('Dropdown', Dropdown)
            .component('select-from-json', SelectFromJSON)
            .component('time-locale', TimeLocale)

            .mount(el);
    }

});