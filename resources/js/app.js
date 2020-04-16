/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import axios from 'axios'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI)
//import routes
const router = new VueRouter({
    mode:'history'
})
Vue.use(VueRouter)
Vue.use(axios)
Vue.use(Vuex)
import storeData from "./store/index"
const store = new Vuex.Store(
  storeData
)

import {
    Form,
    HasError,
    AlertError
} from 'vform'

window.form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


// project component
Vue.component('project-create', require('./components/Projects/ProjectCreate.vue').default);
Vue.component('project-edit', require('./components/Projects/ProjectEdit.vue').default);
// profile component
Vue.component('profile', require('./components/Profile/Profile.vue').default);

const app = new Vue({
    el: '#app',
    store,
});
