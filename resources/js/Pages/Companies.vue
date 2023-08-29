<template>
    <page-head><title>Companies | Tradolla.com</title></page-head>
    <base-layout>
        <company-filter></company-filter>
        <advanced-search></advanced-search>
        <company-list></company-list>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import CompanyFilter from "../Components/Filters/CompanyFilter.vue";
import AdvancedSearch from "../Components/AdvancedSearch.vue";
import CompanyList from "../Components/Company/CompanyList.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        CompanyFilter,
        AdvancedSearch,
        CompanyList,
    },
};
</script>
