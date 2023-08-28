<template>
    <page-head><title>Orders | Tradolla.com</title></page-head>
    <base-layout>
        <orders-table></orders-table>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import OrdersTable from "../Components/Orders/OrdersTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        OrdersTable,
    },
};
</script>
