require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";

import Favorite from "../components/Favorite.vue";

import router from "../router";

createApp({
    components:{
        Favorite,
        
    }
})
.use(router)
.mount('#app');