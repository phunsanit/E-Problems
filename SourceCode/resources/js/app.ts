import '../css/app.css';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

//import './bootstrap';

// Import jQuery
import $ from 'jquery';

// @ts-ignore
window.jQuery = window.$ = $; // Ensure jQuery is globally available

// Import Vue.js and Inertia
import { createApp, h } from 'vue';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
// Vue.js Components
// import DataTable from 'datatables.net-vue3'; // Removed duplicate import
import DataTables from './Components/DataTables.vue';
import Modal from './Components/Modal.vue';
import NavLinks from './Components/NavLink.vue';
import Welcome from './Components/Welcome.vue';
import 'datatables.net';
import 'datatables.net-dt';
import DataTable from 'datatables.net-vue3';
import App from './App.vue';

// Inertia.js
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
createInertiaApp({
  beforeMount() {
    $(document).ready(function() {
      $('#example').DataTable();
    });
  },
  resolve: (name) => resolvePageComponent(`./tickets/${name}.vue`, import.meta.globEager('./tickets/**/*.vue')),
  setup({ el, app, props, plugin }) {
    createApp({ render: () => h(app, props) })
      .use(plugin)
      .use(DataTable)
      .component('DataTables', DataTables)
      .component('Modal', Modal)
      .component('NavLinks', NavLinks)
      .component('Welcome', Welcome)
  },
});

// Remove unnecessary console logs in production
if (import.meta.env.MODE === 'development') {
  //console.log('el', document.getElementById('app'));
}

// intialize
document.addEventListener('DOMContentLoaded', function () {
  console.log('DOMContentLoaded');
  const app = createApp({
    render: () => h(App)
  });

  // Register Vue components globally
  app.component('DataTables', DataTables);
  app.component('Modal', Modal);
  app.component('NavLinks', NavLinks);
  app.component('Welcome', Welcome);

  app.mount('#app');
  console.log('Vue initialized');
});