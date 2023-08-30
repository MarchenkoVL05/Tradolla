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
