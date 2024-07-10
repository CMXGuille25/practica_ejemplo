import './bootstrap';

import form from './components/comments/form.vue'
import { createApp } from "vue";
import App from "../src/App.vue";

createApp(App)
.component("form", form)
.mount("#app")
.use(router)

Vue.component('pagination', require('laravel-vue-pagination'));

///window.Vue = require('vue').default;

///Vue.component('comments-index', require('./components/comments/Index.vue').default)

///const app = new Vue( {
///    el:'#app'
///});
