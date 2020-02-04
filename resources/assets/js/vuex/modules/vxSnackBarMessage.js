const state = {
    showSnackbar: false,
    message: '',
    color: 'primary'
};

const getters = {
  
    getShowSnackbar (state) {
        return state.showSnackbar;
    },

    getMessage (state) {
        return state.message;
    },

    getColor (state) {
        return state.color;
    },

};

const mutations = { 
  
    setShowSnackbar(state, payload) {
        state.showSnackbar = payload;
    },

    setMessage(state, payload) {
        state.message = payload;
    },

    setColor(state, payload) {
        state.color = payload;
    }

};

const actions = {

    changeShowSnackbar({commit}, payload) {
        commit('setShowSnackbar', payload)
    },

    changeMessage({commit}, payload) {
        commit('setMessage', payload);
    },

    changeColor({commit}, payload) {
        commit('setColor', payload);
    }

};

export default {
    state,
    mutations,
    actions,
    getters
}