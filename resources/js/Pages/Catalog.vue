<template>
    <base-layout>
        <div class="max-w-[1627px] mx-auto">
            <p class="text-gray-400">Apply your filters &#8595;</p>
            <product-filter></product-filter>
            <advanced-search></advanced-search>
            <sort-products></sort-products>
            <product-list></product-list>
        </div>
    </base-layout>
</template>

<script>
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProductList from "../Components/Product/ProductList.vue";
import ProductFilter from "../Components/Filters/ProductFilter.vue";
import SortProducts from "../Components/SortProducts.vue";
import AdvancedSearch from "../Components/AdvancedSearch.vue";

export default {
    components: {
        BaseLayout,
        ProductList,
        ProductFilter,
        SortProducts,
        AdvancedSearch,
    },
    data() {
        return {};
    },
};
</script>
