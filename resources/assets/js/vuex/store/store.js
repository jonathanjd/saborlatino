import Vue from 'vue';
import Vuex from 'vuex';
import vxWebsite from '../modules/vxWebsite'
import vxSnackBarMessage from '../modules/vxSnackBarMessage'
Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        vxWebsite,
        vxSnackBarMessage
    }
});