<template>
    <page-head><title>Catalog | Tradolla.com</title></page-head>
    <base-layout>
        <product-filter></product-filter>
        <advanced-search></advanced-search>
        <sort-products :mode="mode"></sort-products>
        <product-list v-if="mode == 'list' || mode == null"></product-list>
        <product-grid v-if="mode == 'grid'"></product-grid>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProductFilter from "../Components/Filters/ProductFilter.vue";
import ProductList from "../Components/Product/ProductList.vue";
import ProductGrid from "../Components/Product/ProductGrid.vue";
import SortProducts from "../Components/SortProducts.vue";
import AdvancedSearch from "../Components/AdvancedSearch.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        ProductFilter,
        ProductList,
        ProductGrid,
        SortProducts,
        AdvancedSearch,
    },
    data() {
        return {
            mode: "",
        };
    },
    mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        const mode = urlParams.get("mode");
        this.mode = mode;
    },
};
</script>
