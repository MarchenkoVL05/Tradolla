<template>
    <page-head><title>Favorites | Tradolla.com</title></page-head>
    <base-layout>
        <tabs>
            <tab name="Products">
                <product-grid-template class="mt-4">
                    <product-card></product-card>
                    <product-card></product-card>
                    <product-card></product-card>
                </product-grid-template>
            </tab>
            <tab name="Procurement processes">
                <procurement-table></procurement-table>
            </tab>
        </tabs>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Tabs, Tab } from "vue3-tabs-component";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProductGridTemplate from "../Components/Product/ProductGridTemplate.vue";
import ProductCard from "../components/product/ProductCard.vue";
import ProcurementTable from "../Components/Procurement/ProcurementTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        ProcurementTable,
        ProductGridTemplate,
        ProductCard,
        Tabs,
        Tab,
    },
};
</script>

<style>
.tabs-component {
    margin-top: 0.5rem;
}

.tabs-component-tabs {
    display: flex;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #e5e7eb;
}

.tabs-component-tab-a {
    font-weight: 600;
    color: #1f2937;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}

a.is-active {
    color: #f97316;
    border-bottom: 2px solid #f97316;
}
</style>
