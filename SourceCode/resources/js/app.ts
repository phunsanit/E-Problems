import '../css/app.css';
import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Import datatables and jQuery in the correct order
import $ from 'jquery'; 
window.jQuery = window.$ = $; // Ensure jQuery is globally available
import 'datatables.net-dt/css/dataTables.dataTables.min.css'; 
import DataTable from 'datatables.net-vue3';

// Components
import Modal from './components/Modal.vue';
import Welcome from './Components/Welcome.vue'; 
import NavLinks from './Components/NavLinks.vue'; 

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Remove unnecessary console logs in production
if (import.meta.env.MODE === 'development') {
  console.log('/Users/Shared/Gits/phunsanit/ll-E-Problems/SourceCode/resources/js/app.ts', appName);
  console.log('el', document.getElementById('app'));
}

createInertiaApp({
  progress: {
    color: '#4B5563',
  },
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy) // Use Ziggy plugin
      .component('DataTables', DataTable)
      .component('Modal', Modal) // Make Modal component globally available
      .component('navlinks', NavLinks) 
      .component('welcome', Welcome);

    app.mount(el);

    return app;
  },
  title: (title) => `${title} - ${appName}`,
});