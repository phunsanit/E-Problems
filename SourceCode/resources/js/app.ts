import '../css/app.css';
import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

// Import datatables and jQuery in the correct order
import $ from 'jquery';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';
import DataTable from 'datatables.net-vue3';

window.jQuery = window.$ = $; // Ensure jQuery is globally available

// Components
import DataTables from './Components/DataTables.vue';
import Modal from './Components/Modal.vue';
import NavLinks from './Components/NavLink.vue';
import Welcome from './Components/Welcome.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Remove unnecessary console logs in production
if (import.meta.env.MODE === 'development') {
  console.log('el', document.getElementById('app'));
}

createInertiaApp({
  progress: {
    color: '#4B5563',
  },
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    const app = createApp({
      render: () => h(App, props)
    })
      .use(plugin)

      .component('DataTables', DataTables)
      .component('Modal', Modal) // Make Modal component globally available
      .component('navlinks', NavLinks)
      .component('welcome', Welcome)

      .mount(el);

    return app;
  },
  title: (title) => `${title} - ${appName}`,
});