import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../components/website/Home'
import PageBuy from '../components/website/PageBuy'
import PagePackages from '../components/website/PagePackage.vue'
import PageAbout from '../components/website/PageAbout'
import PageMission from '../components/website/PageMission'
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
    },
    {
      path: '/buy-package/:packageId',
      name: 'buy',
      component: PageBuy,
    },
    {
      path: '/mission',
      name: 'mission',
      component: PageMission,
    },
    {
      path: '/about',
      name: 'about',
      component: PageAbout,
    },
    {
      path: '/package',
      name: 'packages',
      component: PagePackages,
    },
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history',
})

export default router;