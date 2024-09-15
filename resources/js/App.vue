<template>
    <header class="flex items-center justify-center p-2.5">
        <Nav />
    </header>
    <main class="flex items-center justify-center h-screen">
        <FixedIncome />
    </main>
        <router-view></router-view>

</template>

<script setup>
    import FixedIncome from "@/components/calculators/FixedIncome.vue";
    import Nav from "@/components/Nav.vue";
</script>

<style scoped>

</style>
