
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Routes from './routes';
import Vuetify from 'vuetify';
import App from './components/App.vue';
import Navigation from './components/partials/Navigation.vue';
import Toolbar from './components/partials/Toolbar.vue';
import Downloads from './components/partials/Downloads.vue';

Vue.component('navigation', Navigation);
Vue.component('toolbar', Toolbar);
Vue.component('downloads', Downloads);

Vue.use(VueRouter);
Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    template: '<App />',
    components: { App },
    router: new VueRouter({
        mode: 'history',
        routes: Routes
    }),
});