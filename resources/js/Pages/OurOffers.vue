<template>
    <page-head><title>Our proposals | Tradolla.com</title></page-head>
    <base-layout>
        <div class="flex justify-end">
            <button-black>New offer</button-black>
        </div>
        <my-procurement-table></my-procurement-table>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import MyProcurementTable from "../Components/Procurement/MyProcurementTable.vue";
import ButtonBlack from "../Components/Buttons/ButtonBlack.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        MyProcurementTable,
        ButtonBlack,
    },
};
</script>
