import { createRouter, createWebHistory } from "vue-router";

import Favorite from "../components/Favorite.vue";
const routes = [
    {
        path: '/',
        name: 'accueil',
        component: Favorite
    },
    {
        path: '/offre/{id}',
        name: 'message',
        component: Message
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
});