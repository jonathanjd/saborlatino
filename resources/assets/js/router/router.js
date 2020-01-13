import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../components/website/Home'
import Login from '../components/auth/Login'
import Admin from '../components/admin/Admin'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    },
    {
      path: '/admin',
      name: 'admin',
      component: Admin,
    }
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history',
})

export default router;