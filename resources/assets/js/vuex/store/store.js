import Vue from 'vue';
import Vuex from 'vuex';
import Website from '../modules/Website'
import vxShoppingCar from '../modules/vxShoppingCar'
Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        Website,
        vxShoppingCar
    }
});