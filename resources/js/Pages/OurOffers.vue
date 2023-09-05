<template>
    <page-head><title>Our proposals | Tradolla.com</title></page-head>
    <base-layout>
        <div class="flex justify-end">
            <Link href="/procurements/our/create">
                <button-black>New offer</button-black>
            </Link>
        </div>
        <my-procurement-table></my-procurement-table>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import MyProcurementTable from "../Components/Procurement/MyProcurementTable.vue";
import ButtonBlack from "../Components/Buttons/ButtonBlack.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        MyProcurementTable,
        ButtonBlack,
    },
};
</script>
