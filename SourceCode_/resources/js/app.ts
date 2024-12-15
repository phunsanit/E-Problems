import { createApp } from 'vue';
//import App from './App.vue';

import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';

// DataTables Imports (Important: After jQuery)
import DataTable from 'datatables.net-vue3';
import DataTablesLib from 'datatables.net';
import 'datatables.net-select-dt';
import 'datatables.net-responsive-dt';
DataTable.use(DataTablesLib);

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('./components/TicketFormComponent.vue'),
    },
    // ... other routes
  ],
});

const app = createApp(App);
app.use(router);

// Configure axios base URL
axios.defaults.baseURL = '/api'; // Or your API base URL
app.config.globalProperties.$axios = axios;

app.mount('#app');