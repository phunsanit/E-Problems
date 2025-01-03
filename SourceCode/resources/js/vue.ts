// vue.ts
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Import component
import toLocaleDateString from './Components/toLocaleDateString.vue';

export const createVueApp = (options: {
    el: HTMLElement | string,
    App?: any,
    props?: any,
    plugin?: any,
    inertiaApp?: any,
}) => {
    const app = options.inertiaApp
        ? options.inertiaApp.use(DataTable)
        : createApp({ render: () => h(options.App, options.props) })

            .component('to-locale-date-string', toLocaleDateString)

            //.use(options.plugin)
            .use(ZiggyVue)

            .mount(options.el);

    return app;
};