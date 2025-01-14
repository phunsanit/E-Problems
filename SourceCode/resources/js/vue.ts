import { createApp, DefineComponent, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// import component
import DateLocale from './Components/DateLocale.vue';
import Dropdown from './Components/Dropdown.vue';
import SelectFromJSON from './Components/SelectFromJSON.vue';
import TimeLocale from './Components/TimeLocale.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

document.addEventListener('DOMContentLoaded', () => {
    let el = document.getElementById('app');

    let app; // Declare app variable

    if (el) { //inertiajs
        createInertiaApp({
            resolve: (name) =>
                resolvePageComponent(
                    `./Pages/${name}.vue`,
                    import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
                ),
            setup({ el, App, props, plugin }) {
                app = createApp({ render: () => h(App, props) })

                    .use(plugin)
                    .use(ZiggyVue)
            },
            progress: {
                color: '#4B5563'
            },
            title: (title) => `${title} - ${appName}`
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