import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import DataTable from 'datatables.net-vue3';

export const createVueApp = (options: {
    el: HTMLElement | string,
    app?: any,
    props?: any,
    plugin?: any,
    inertiaApp?: any, // เพิ่ม parameter สำหรับ Inertia app
}) => {
    const app = options.inertiaApp 
        ? options.inertiaApp.use(DataTable) // ใช้ DataTable plugin กับ Inertia app
        : createApp({ render: () => h(options.app, options.props) })
            .use(options.plugin)
            .use(ZiggyVue)
            .use(DataTable); // ใช้ DataTable plugin

    app.mount(options.el);

    return app; // return Vue app instance
};