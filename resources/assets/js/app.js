
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import App from './components/App.vue';
import AppPage from './components/pages/App.vue';
import Home from './components/pages/Home.vue';
import Navigation from './components/pages/Navigation.vue';
import Toolbar from './components/partials/Toolbar.vue';
import Downloads from './components/partials/Downloads.vue';

Vue.component('navigation', Navigation);
Vue.component('toolbar', Toolbar);
Vue.component('downloads', Downloads);
 
Vue.use(VueRouter);
Vue.use(Vuetify);

var router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/app',
            component: AppPage,
        }
    ]
});

const app = new Vue({
    router,
    el: '#app',
    template: '<App />',
    components: { App }
});