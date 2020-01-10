
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import App from './components/base/App.vue'
import AOS from "aos"
import "aos/dist/aos.css"
Vue.use(Vuetify);
Vue.use(VueRouter)

import Home from './components/website/Home'
import Login from './components/auth/Login'
import Admin from './components/admin/Admin'

const router = new VueRouter({
  mode: 'history',
  routes: [
      {
          path: '/',
          name: 'home',
          component: Home
      },
      {
        path: '/login',
        name: 'login',
        component: Login,
      },
      {
        path: '/admin',
        name: 'admin',
        component: Admin
      }
  ],
});

export default new Vuetify({
    icons: {
      iconfont: 'fa',
    },
  })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    created() {
      AOS.init();
    },
    el: '#app',
    router,
    components: { App },
    vuetify : new Vuetify(),
});
