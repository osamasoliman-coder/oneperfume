import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import dashboard from '../components/admin/Dashboard'
import WebsiteHome from "../components/website/WebsiteHome";
// import Login from "../components/auth/Login";

const routes = [
    {
        path: '/',
        component: WebsiteHome,
        name:'home'
    },
    {
        path: '/admin',
        component: dashboard,
        name:'dashboard'
    },
    // {
    //     path: '/login',
    //     component: Login,
    //     name:'login'
    // },
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

export default router;
