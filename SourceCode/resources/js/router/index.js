import { createRouter, createWebHistory } from 'vue-router';
import Welcome from '../components/Welcome.vue'; 
import Dashboard from '../components/Dashboard.vue'; 

const routes = [
    { path: '/', name: 'welcome', component: Welcome },
    { path: '/dashboard', name: 'dashboard', component: Dashboard }, 
    // ...more routes
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;