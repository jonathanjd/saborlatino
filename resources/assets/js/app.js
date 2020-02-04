
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import { store } from './vuex/store/store.js'
import Vuetify from 'vuetify'
import App from './components/base/App.vue'
import AOS from "aos"
import "aos/dist/aos.css"
import { ValidationProvider, ValidationObserver, extend } from 'vee-validate'
import { required, min } from "vee-validate/dist/rules";
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)
extend('required', {
  ...required,
  message: 'El Campo es requerido'
});
extend('min', min);
Vue.component('ValidationProvider', ValidationProvider)
Vue.component('ValidationObserver', ValidationObserver)
Vue.use(Vuetify);



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

import router from './router/router';

const app = new Vue({
    created() {
      AOS.init();
    },
    el: '#app',
    router,
    store,
    components: { App },
    vuetify : new Vuetify(),
});
