<template>
    <Header />
    <router-view />
</template>

<script>
import Header from "./components/Header.vue";
export default {
    name: 'App',
    components: {Header},
    data: () => ({
        //
    }),
    methods: {
        //
    },
}
</script>

<style>

</style>


<!--import './bootstrap';-->
<!--import * as Vue from 'vue/dist/vue.esm-bundler';-->

<!--window.Vue = Vue;-->

<!--import * as Vuex from 'vuex';-->
<!--import * as VueRouter from 'vue-router';-->

<!--Vue.use(Vuex);-->
<!--Vue.use(VueRouter);-->

<!--const router = new VueRouter({-->
<!--mode: 'history',-->
<!--routes: require('./routes.js')-->
<!--});-->

<!--const store = new Vuex.Store({-->
<!--state: {-->
<!--products: [],-->
<!--cart: [],-->
<!--order: {}-->
<!--},-->

<!--mutations: {-->
<!--updateProducts(state, products) {-->
<!--state.products = products;-->
<!--},-->
<!--addToCart(state, product) {-->
<!--let productInCartIndex = state.cart.findIndex(item => item.slug === product.slug);-->
<!--if (productInCartIndex !== -1) {-->
<!--state.cart[productInCartIndex].quantity++;-->
<!--return;-->
<!--}-->
<!--product.quantity = 1;-->
<!--state.cart.push(product);-->
<!--},-->
<!--removeFromCart(state, index) {-->
<!--state.cart.splice(index, 1);-->
<!--},-->
<!--updateOrder(state, order) {-->
<!--state.order = order;-->
<!--},-->
<!--updateCart(state, cart) {-->
<!--state.cart = cart;-->
<!--}-->
<!--},-->
<!--actions: {-->
<!--getProducts({commit}) {-->
<!--axios.get('/api/products')-->
<!--.then(response => {-->
<!--commit('updateProducts', response.data.data);-->
<!--})-->
<!--.catch(error => {-->
<!--console.error(error);-->
<!--});-->
<!--},-->
<!--clearCart({commit}) {-->
<!--commit('updateCart', []);-->
<!--}-->
<!--}-->
<!--});-->

<!--const app = new Vue({-->
<!--router,-->
<!--store,-->
<!--el: '#app',-->
<!--created() {-->
<!--this.$store.dispatch('getProducts')-->
<!--.then(_ => {-->
<!--})-->
<!--.catch((error) => console.error(error))-->
<!--}-->
<!--})-->

