import Home from '@/views/Home.vue'
import Shop from '@/views/Shop.vue'
import Contact from '@/components/contact/Contact.vue'
import ShopDetails from '@/views/ShopDetails.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Skeleton from '@/views/Skeleton.vue'
import Vmodel from '@/views/Vmodel.vue'
import RouterPush from '@/views/RouterPush.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
   
    {
      path: '/home',
      name: 'home',
      component: Home
    },

    {
      path: '/shop',
      name: 'shop',
      component: Shop
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    },
    {
      path: '/skeleton',
      name: 'skeleton',
      component: Skeleton
    },

    {
      path: '/vmodel',
      name: 'vmodel',
      component: Vmodel
    },
    {
      path: '/login',
      name: 'login',
      component: RouterPush
    },
    {
      path: '/shop-details',
      name: 'shop-details',
      component: ()=> import('../views/ShopDetails.vue')
    }

  ]
})

export default router
