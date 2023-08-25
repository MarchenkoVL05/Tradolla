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
            <div
                class="col-span-12 md:col-span-6 p-3 sm:p-4 rounded-md border shadow bg-white"
            >
                <p class="font-bold">Number of deals</p>
                <canvas class="mt-4" id="dealsPerMonth"></canvas>
            </div>
            <div
                class="col-span-12 md:col-span-6 p-3 sm:p-4 rounded-md border shadow bg-white"
            >
                <p class="font-bold">Total sales (USD)</p>
                <canvas class="mt-4" id="totalSales"></canvas>
            </div>
            <div
                class="col-span-12 2xl:col-span-9 py-4 rounded-md border overflow-auto shadow bg-white"
            >
                <div class="px-4 flex justify-between gap-4">
                    <div
                        class="flex justify-between gap-4 sm:text-lg font-bold"
                    >
                        Purchase orders:
                    </div>
                    <a class="hover:underline" href="./order-list.html"
                        >View all</a
                    >
                </div>
                <div
                    class="mt-2 grid grid-cols-12 text-sm sm:text-base min-w-[686px]"
                >
                    <div class="col-span-3 px-4 py-2 border-b font-semibold">
                        Order
                    </div>
                    <div class="col-span-7 px-4 py-2 border-b font-semibold">
                        Offer
                    </div>
                    <div class="col-span-2 px-4 py-2 border-b font-semibold">
                        Action
                    </div>
                    <!-- 1 order -->
                    <div class="col-span-3 p-4">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Segezha Group</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 font-medium hover:underline"
                        href="./offer-details.html"
                        >Construction Services for Office Expansion Project
                    </a>
                    <div class="col-span-2 p-4">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                    <!-- 2 order -->
                    <div class="col-span-3 p-4 bg-slate-100">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Aksioma</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 bg-slate-100 font-medium hover:underline"
                        href="./offer-details.html"
                        >Software Development Services
                    </a>
                    <div class="col-span-2 p-4 bg-slate-100">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                    <!-- 3 order -->
                    <div class="col-span-3 p-4">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Segezha Group</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 font-medium hover:underline"
                        href="./offer-details.html"
                        >Chunghwa Telecom Co., Ltd.
                    </a>
                    <div class="col-span-2 p-4">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                    <!-- 4 order -->
                    <div class="col-span-3 p-4 bg-slate-100">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Aksioma</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 bg-slate-100 font-medium hover:underline"
                        href="./offer-details.html"
                        >Software Development Services
                    </a>
                    <div class="col-span-2 p-4 bg-slate-100">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                    <!-- 5 order -->
                    <div class="col-span-3 p-4">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Segezha Group</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 font-medium hover:underline"
                        href="./offer-details.html"
                        >Construction Services for Office Expansion Project
                    </a>
                    <div class="col-span-2 p-4">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                    <!-- 6 order -->
                    <div class="col-span-3 p-4 bg-slate-100">
                        Order by
                        <a
                            class="text-blue-500 hover:underline"
                            href="./company.html"
                            >Wialon</a
                        >
                    </div>
                    <a
                        class="col-span-7 p-4 bg-slate-100 font-medium hover:underline"
                        href="./offer-details.html"
                        >Software Development Services
                    </a>
                    <div class="col-span-2 p-4 bg-slate-100">
                        <a class="text-orange-500 hover:underline" href="#"
                            >Open order</a
                        >
                    </div>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-4 2xl:col-span-3 p-4 rounded-md border shadow bg-white"
            >
                <p class="font-bold">Popularity of categories</p>
                <canvas class="mt-4" id="popularityOfCategories"></canvas>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead, Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import StatisticCard from "../Components/StatisticCard.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        StatisticCard,
    },
};
</script>
