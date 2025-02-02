
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('homepage', require('./components/homepage.vue'));
Vue.component('profile', require('./components/profile.vue'));
Vue.component('register', require('./components/register.vue'));
Vue.component('login', require('./components/login.vue'));
Vue.component('dashboard', require('./components/dashboard.vue'));
Vue.component('product', require('./components/product.vue'));
Vue.component('protable', require('./components/productTable.vue'));


const app = new Vue({
    el: '#app'
});
