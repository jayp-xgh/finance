<template>
    <div>
<!--        <Header />-->
<!--        <Sidebar />-->
        <MenuBar />
        <FixedIncomeCalculator />
        <router-view></router-view>
    </div>
</template>

<script setup>
    import Sidebar from '../js/components/Sidebar.vue';
    import Header from '../js/components/Header.vue';
    import MenuBar from '@/components/MenuBar.vue';
    import FixedIncomeCalculator from "@/components/FixedIncomeCalculator.vue";

</script>

<style scoped>

</style>
