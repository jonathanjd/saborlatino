const state = {
    language: true
};

const getters = {


    getLanguage(state){
        return state.language
    }

    // getName(state) {
    //   return state.name;
    // },
  
    // getData(state) {
    //   return state.data;
    // },
  
    // getType(state) {
    //   return state.type;
    // },
  
};

const mutations = {

    setLanguage(state, payload) {
        state.language = payload;
    }

    // setName(state, payload) {
    //   state.name = payload;
    // },
  
    // setData(state, payload) {
    //   state.data = payload;
    // },
  
    // setType(state, payload) {
    //   state.type = payload;
    // },
  
};

const actions = {

    actionLanguage({ commit }, payload) {
        commit('setLanguage', payload);
    }

    // loadName({
    //   commit
    // }, payload) {
    //   commit('setName', payload);
    // },
  
    // loadData({
    //   commit
    // }, payload) {
    //   return new Promise((resolve, reject) => {
    //     axios.get('/api/auth/user?token='.concat(payload)).then(response => {
    //       if (response.status === 200) {
    //         commit('setData', response.data);
    //         commit('setName', response.data.data.name);
    //         commit('setType', response.data.data.type);
    //         resolve();
    //       } else {
    //         reject();
    //       }
    //     }).catch(error => {
    //       reject();
    //     });
    //   });
    // }
  
};

export default {
    state,
    mutations,
    actions,
    getters
}