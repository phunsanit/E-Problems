// vue.ts
import { createApp, h } from 'vue'; // Remove DefineComponent import
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

export const createVueApp = (
    el: HTMLElement, 
    App: any,  // Use any for App 
    props: any, 
    plugin: any
) => {
    createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(ZiggyVue)
        .mount(el);
};