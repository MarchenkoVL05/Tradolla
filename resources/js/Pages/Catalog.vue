<template>
    <page-head><title>Catalog | Tradolla.com</title></page-head>
    <base-layout>
        <title-filter>Apply your filters &#8595;</title-filter>
        <product-filter></product-filter>
        <advanced-search></advanced-search>
        <sort-products></sort-products>
        <product-list></product-list>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProductList from "../Components/Product/ProductList.vue";
import TitleFilter from "../Components/Filters/TitleFilter.vue";
import ProductFilter from "../Components/Filters/ProductFilter.vue";
import SortProducts from "../Components/SortProducts.vue";
import AdvancedSearch from "../Components/AdvancedSearch.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        ProductList,
        TitleFilter,
        ProductFilter,
        SortProducts,
        AdvancedSearch,
    },
    data() {
        return {};
    },
};
</script>
