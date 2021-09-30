require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from "./routes";

const router = new VueRouter({
    routes,
    mode: "history",
    hashbang: false,
    history: true,
    linkActiveClass: "active",

});

const app = new Vue({
    el: '#app',
    router,
});
