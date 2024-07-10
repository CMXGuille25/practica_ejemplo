import { createRouter, createWebHistory } from 'vue-router';

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import form from '../components/comments/form.vue';

const routes = [
    {
        path: '/',
        name: '/create',
        component: form
    }
];

///const router = createRouter({
   /// history: createWebHistory(),
    ///routes,
///});

const router = new VueRouter({
    mode: "history",
    routes,
  });
  
  export default router;

export default router;
