
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//require('https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js');
require('./bootstrap');
// require('./admin-lte');
//import VueRouter from 'vue-router';
//BlogComponent: () => import('./components/BlogComponent.vue');
import BlogComponent from './components/BlogComponent.vue';
import WishList from './components/Wishlist.vue';
import BillingFormComponent from './components/BillingForm.vue';
import CardDetailsComponent from './components/Card.vue';
import Vue from 'vue';
// window.Vue = require('vue');

//tell system to use VueRouter by resgistering it as a global comonent c_sousen
//Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// 1. Define route components.
// These can be imported from other files
// let dashboard = require('./components/Dashboard.vue');
// let profile = require('./components/Profile.vue');
//c_sousen
// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// let routes = [
//    // { path: '/dashboard', name:Dashboard, component: dashboard },
//    // { path: '/profile', name:Profile, component: profile },
//     { path: 'cart/wishlist', name:WishList, component : wishlist}
//   ]
// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
// history mode enabled
// const router = new VueRouter({
//   mode : 'history',
//     routes // short for `routes: routes`
//   })


//c_sousen testing the example component
// following is global component
Vue.component('example', require('./components/ExampleComponent.vue'));
//Vue.component('wishlist', WishList);
// export default{
//   components : {example}
// }
//c_sousen
// const app = new Vue({
//     el: '#app',
//     // components: {wishlist,example},
//     // router
// });
//registering a local component for our wishlist segment

//vue instance for our blog content
const vm_blog = new Vue({
  el: '#blogs',
  components:{
    blogcontent : BlogComponent
  }
});
//vue instance for our wishlist content
const vm_wishlist = new Vue({
  el:'#wishlist_component',
  components:{
    wishlist : WishList
  }
});
//c_sosuen : added for testing AXIO
const vm_axios_test = new Vue({
  el : '#axiostestid',
  components : {
    axiostest : require('./components/AxiosDemo.vue')
  }
});
//vue instance for our billing adress content
const vm_billing_form = new Vue({
  el : '#billform',
  components : {
    Billing_details_form : BillingFormComponent
  }
});
//vue instance for our card details  content
const vm_card_form = new Vue({
  el : '#cardcomp',
  components : {
    Card_details : CardDetailsComponent
  }
});
// vm_axios_test.counter = GetCartCount();
// vm_axios_test.wlcounter =GetWishlistCount();                                                                               