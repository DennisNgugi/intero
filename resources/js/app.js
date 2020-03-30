/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
//import routes
const router = new VueRouter({
    mode:'history'
})
Vue.use(VueRouter)


Vue.component('project-create', require('./components/Projects/ProjectCreate.vue').default);
Vue.component('project-edit', require('./components/Projects/ProjectEdit.vue').default);


const app = new Vue({
    el: '#app',
});
