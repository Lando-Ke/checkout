<template>
    <div class="p-4">
        <router-link to="/">Products</router-link> |
        <router-link to="/products/slug">Product</router-link> |
        <router-link to="/checkout">checkout</router-link> |
        <router-link to="/summary">Summary</router-link> |
    </div>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style scoped>
h1, div {
    background-color: cornflowerblue;
    color: white;
}
</style>
