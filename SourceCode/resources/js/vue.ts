import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { ZiggyVue } from 'ziggy-js';

// import component
import LocaleDate from './Components/LocaleDate.vue';
import LocaleTime from './Components/LocaleTime.vue';

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
            .component('LocaleDate', LocaleDate)
            .component('LocaleTime', LocaleTime)

            .mount(el);
    }

});