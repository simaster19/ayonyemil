// Import Vue Router
import {
    createRouter, createWebHistory
} from 'vue-router';

//define routes
const routes = [
    {
        path : '/',
        name : 'home',
        component: () => import('../views/index.vue')
    }
]

// create Router
const router = createRouter({history: createWebHistory(), routes});

export default router;