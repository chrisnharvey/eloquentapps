import AppPage from './components/pages/App.vue';
import Home from './components/pages/Home.vue';

export default [
    {
        path: '/',
        component: Home
    },
    {
        path: '/app',
        component: AppPage,
    }
];
