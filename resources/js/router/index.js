import {createRouter, createWebHistory} from "vue-router";
import Index from "../components/Products/Index.vue";
import Show from "../components/Products/Show.vue";
import Checkout from "../components/Order/Checkout.vue";
import Summary from "../components/Order/Summary.vue";

const routes = [
    {
        path: '/',
        name: 'products.index',
        component: Index
    },
    {
        path: '/products/:slug',
        name: 'products.show',
        component: Show
    },
    {
        path: '/checkout',
        name: 'order.checkout',
        component: Checkout
    },
    {
        path: '/summary',
        name: 'order.summary',
        component: Summary
    }
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
