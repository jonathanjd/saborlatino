import Vue from 'vue';
import Vuex from 'vuex';
import Website from '../modules/Website'
Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        Website,
    }
});