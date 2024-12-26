import '../css/app.css';
//import './bootstrap';

//Font Awesome
import { config, library, dom } from '@fortawesome/fontawesome-svg-core';

import { faFacebook, faInstagram, faXTwitter } from '@fortawesome/free-brands-svg-icons';
import { faAddressBook, faClock, faCopy } from '@fortawesome/free-regular-svg-icons';
import { faDownload, faEnvelope, faHome, faMinus, faPen, faPhone, faPlus, faStar, faTrash, faUser } from '@fortawesome/free-solid-svg-icons';

library.add( faAddressBook, faClock, faCopy, faDownload, faEnvelope, faFacebook, faHome, faInstagram, faMinus, faPen, faPhone, faPlus, faStar, faTrash, faUser, faXTwitter );//all icons

config.autoReplaceSvg = 'nest';

// This line is important to trigger Font Awesome to find and replace <i> tags
dom.watch();

//jQuery
import $ from "jquery";

window.$ = $;

//jQuery.DataTables.net
import 'datatables.net';
import 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';



import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
