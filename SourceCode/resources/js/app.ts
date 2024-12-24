import '../css/app.css';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

// Import jQuery
import $ from 'jquery';

// @ts-ignore
window.jQuery = window.$ = $; 

import { createApp, h } from 'vue';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

// Vue.js Components
import 'datatables.net-dt';
import 'datatables.net';
import DataTable from 'datatables.net-vue3'; 
import DataTables from './Components/DataTables.vue';
import Dropdown from './Components/Dropdown.vue';
import Modal from './Components/Modal.vue';
import NavLinks from './Components/NavLink.vue';
import Welcome from './Components/Welcome.vue';

// Define your root Vue instance
const app = createApp({}); 

// Register Vue components globally
app.component('DataTables', DataTables);
app.component('dropdown', Dropdown);
app.component('Modal', Modal);
app.component('NavLinks', NavLinks);
app.component('Welcome', Welcome);

// Mount the app to the #app element if it exists (for SPA pages)
const el = document.getElementById('appSPA');
if (el) {
  createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')), 
    setup({ el, app, props, plugin }) {
      app.use(plugin)
         .use(DataTable) 
         .mount(el); 
    },
  });
} else {
  // If #app doesn't exist, assume it's a traditional multi-page setup
  app.mount('#your-other-root-element'); // Replace with your actual root element ID
}