<script setup>
import FixedIncome from "@/components/calculators/FixedIncome.vue";
import Nav from "@/components/Nav.vue";
import { BarChart } from '@/components/ui/chart-bar'
import {
    ResizableHandle,
    ResizablePanel,
    ResizablePanelGroup,
} from '@/components/ui/resizable'

const data = [
    { name: 'Jan', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'Feb', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'Mar', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'Apr', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'May', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'Jun', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
    { name: 'Jul', investidos: Math.floor(Math.random() * 2000) + 500, rendimentos: Math.floor(Math.random() * 2000) + 500 },
]
</script>
<template>
    <header class="flex items-center justify-center p-2.5">
        <Nav />
    </header>
    <ResizablePanelGroup
        id="handle-demo-group-1"
        direction="horizontal"
        class="w-screen rounded-lg border"
    >
        <ResizablePanel id="handle-demo-panel-1" :default-size="20">
            <div class="flex h-screen items-center justify-center p-6">
                <FixedIncome />
            </div>
        </ResizablePanel>
        <ResizableHandle id="handle-demo-handle-1" with-handle />
        <ResizablePanel id="handle-demo-panel-2" :default-size="75">
            <div class="flex h-full items-center justify-center p-6">
                <BarChart
                    class="w-full h-[600px]"
                    index="name"
                    :data="data"
                    :categories="['investidos', 'rendimentos']"
                    :y-formatter="(tick, i) => {
                        return typeof tick === 'number'
                        ? `$ ${new Intl.NumberFormat('us').format(tick).toString()}`
                        : ''
                    }"
                    :rounded-corners="4"
                />
            </div>
        </ResizablePanel>
    </ResizablePanelGroup>


        <router-view></router-view>

</template>
<style scoped>

</style>
