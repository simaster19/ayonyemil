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
    },
    {
        path : '/testimonial',
        name: 'testimonial',
        component: () => import('../views/testimonial.vue')
    },
    {
        path : '/menu',
        name: 'menu',
        component: () => import('../views/menu.vue')
    },
    {
        path : '/contact',
        name: 'contact',
        component: () => import('../views/contact.vue')
    },
    {
        path: '/login',
        name: 'form_login',
        component: () => import('../views/form_login.vue')
    }
]

// create Router
const router = createRouter({history: createWebHistory(), routes});

export default router;