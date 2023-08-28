<template>
    <page-head><title>Dashboard | Tradolla.com</title></page-head>
    <base-layout>
        <h1 class="flex justify-between items-center flex-wrap gap-1">
            <span class="text-lg sm:text-xl font-bold"
                >Chunghwa Telecom Co., Ltd.
            </span>
            <Link
                class="text-sm font-medium hover:underline text-orange-500"
                href="/profile"
                >Edit profile
            </Link>
        </h1>
        <div class="mt-4 sm:mt-2 grid grid-cols-12 gap-3">
            <!-- Statistic Cards -->
            <statistic-card class="col-span-12" :color="'green'">
                <template #title>Total sales:</template>
                <template #amount>$270 000</template>
            </statistic-card>
            <statistic-card class="col-span-6" :color="'orange'">
                <template #title>Your offers:</template>
                <template #amount>$3 400 000</template>
            </statistic-card>
            <statistic-card class="col-span-6" :color="'red'">
                <template #title>This month::</template>
                <template #amount>$55 440 &darr;</template>
            </statistic-card>

            <!-- Info widgets -->
            <info-widget class="col-span-12 md:col-span-6 p-3 sm:p-4">
                <template #title>Number of deals</template>
                <template #graphic><canvas class="mt-4"></canvas></template>
            </info-widget>
            <info-widget class="col-span-12 md:col-span-6 p-3 sm:p-4">
                <template #title>Total sales (USD)</template>
                <template #graphic><canvas class="mt-4"></canvas></template>
            </info-widget>

            <orders-preview-table
                class="col-span-12 2xl:col-span-9"
            ></orders-preview-table>
            <info-widget class="col-span-12 md:col-span-4 2xl:col-span-3 p-4">
                <template #title>Popularity of categories</template>
            </info-widget>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead, Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import StatisticCard from "../Components/StatisticCard.vue";
import InfoWidget from "../Components/InfoWidget.vue";
import OrdersPreviewTable from "../Components/OrdersPreviewTable/OrdersPreviewTable.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        StatisticCard,
        InfoWidget,
        OrdersPreviewTable,
    },
};
</script>
