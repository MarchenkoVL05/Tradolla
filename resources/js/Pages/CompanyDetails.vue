<template>
    <page-head><title>Company | Tradolla.com</title></page-head>
    <base-layout>
        <div class="grid grid-cols-1 2xl:grid-cols-9 gap-3 xl">
            <div
                class="2xl:col-span-8 p-4 border rounded bg-white text-gray-800"
            >
                <div
                    class="flex justify-between gap-4 items-start flex-wrap mb-4"
                >
                    <div>
                        <img
                            class="h-12 sm:h-16"
                            src="/images/company-logo.svg"
                            alt=""
                        />
                        <h1 class="mt-4 text-xl sm:text-2xl">
                            Chunghwa Telecom Co., Ltd.
                        </h1>
                        <a
                            class="inline-block mt-1 text-gray-400 hover:underline"
                            href="mailto:chtir@cht.com.tw"
                            >chtir@cht.com.tw</a
                        >
                        <p class="text-sm sm:text-base mt-2 text-gray-500">
                            is the largest integrated telecom service provider
                            in Taiwan, and the incumbent local exchange carrier
                            of PSTN, Mobile, and broadband services in the
                            country.
                        </p>
                    </div>
                    <button-black class="flex gap-2 font-normal">
                        <img src="/images/contact_us.svg" alt="" />Contact Us
                    </button-black>
                </div>
                <tabs>
                    <tab name="Information">
                        <div class="mt-4 p-4 rounded border shadow">
                            <h4 class="font-semibold text-lg sm:text-xl">
                                About the company
                            </h4>
                            <company-info-table
                                class="mt-3"
                            ></company-info-table>
                        </div>
                        <div class="mt-4 p-4 rounded border shadow">
                            <h4 class="font-semibold text-lg sm:text-xl">
                                Who we are?
                            </h4>
                            <company-about-text></company-about-text>
                        </div>
                        <company-social class="mt-4 p-4"></company-social>
                    </tab>
                    <tab name="Goods and services">
                        <product-grid-template class="mt-4">
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                            <product-card></product-card>
                        </product-grid-template>
                        <pagination-list></pagination-list>
                    </tab>
                    <tab name="Trading procedures">
                        <procurement-table></procurement-table>
                        <pagination-list></pagination-list>
                    </tab>
                </tabs>
            </div>
            <div
                class="2xl:col-span-1 h-fit px-2 py-4 mb-2 border rounded overflow-auto bg-white text-gray-800"
            >
                <h4 class="font-medium text-center text-slate-800">
                    Employees (6)
                </h4>
                <div
                    class="mt-4 flex flex-wrap justify-center gap-8 2xl:flex-col 2xl:gap-4"
                >
                    <employee-card
                        v-for="index in 6"
                        :key="index"
                    ></employee-card>
                </div>
                <button class="block mt-4 mx-auto text-gray-500">
                    view all &#8595;
                </button>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Tabs, Tab } from "vue3-tabs-component";
import BaseLayout from "../Layouts/BaseLayout.vue";
import EmployeeCard from "../Components/EmployeeCard.vue";
import ButtonBlack from "../Components/Buttons/ButtonBlack.vue";
import ProductGridTemplate from "../Components/Product/ProductGridTemplate.vue";
import ProductCard from "../Components/Product/ProductCard.vue";
import ProcurementTable from "../Components/Procurement/ProcurementTable.vue";
import PaginationList from "../Components/Pagination/PaginationList.vue";
import CompanySocial from "../Components/Company/CompanySocial.vue";
import CompanyInfoTable from "../Components/Company/CompanyInfoTable.vue";
import CompanyAboutText from "../Components/Company/CompanyAboutText.vue";

export default {
    components: {
        PageHead,
        Tabs,
        Tab,
        BaseLayout,
        EmployeeCard,
        ButtonBlack,
        ProductGridTemplate,
        ProductCard,
        ProcurementTable,
        PaginationList,
        CompanySocial,
        CompanyInfoTable,
        CompanyAboutText,
    },
};
</script>
