
<script setup>
    import navbarVue from './components/navbar.vue';
    import footerVue from './components/footer.vue';
</script>

<template>
    <navbarVue></navbarVue>
    <router-view></router-view>
    <footerVue></footerVue>
</template>
