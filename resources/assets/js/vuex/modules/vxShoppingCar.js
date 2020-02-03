const state = {
    shoppingCarList: []
};

const getters = {
  
    getShoppingCarListTotal(state) {
        return state.shoppingCarList.length;
    }

};

const mutations = {

    setShoppingCarList(state, payload) {
        state.shoppingCarList = payload;
    }
  
};

const actions = {


};

export default {
    state,
    mutations,
    actions,
    getters
}