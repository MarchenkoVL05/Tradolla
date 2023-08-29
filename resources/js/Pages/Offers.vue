<template>
    <page-head><title>Procurements processes | Tradolla.com</title></page-head>
    <base-layout>
        <procurement-filter></procurement-filter>
        <advanced-search></advanced-search>
        <procurement-table></procurement-table>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import TitleFilter from "../Components/Filters/TitleFilter.vue";
import ProcurementFilter from "../Components/Filters/ProcurementFilter.vue";
import AdvancedSearch from "../Components/AdvancedSearch.vue";
import ProcurementTable from "../Components/Procurement/ProcurementTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        TitleFilter,
        ProcurementFilter,
        AdvancedSearch,
        ProcurementTable,
    },
};
</script>
