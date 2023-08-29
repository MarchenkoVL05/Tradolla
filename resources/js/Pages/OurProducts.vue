<template>
    <base-layout>
        <div class="mt-4 sm:mt-0 flex justify-between gap-2 flex-wrap">
            <button-export-csv></button-export-csv>
            <Link
                class="py-2 px-5 flex justify-center items-center gap-2 rounded transition-all cursor-pointer text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
                href="#"
            >
                Add a product
            </Link>
        </div>
        <div
            class="mt-2 rounded border bg-white min-w-full shadow overflow-auto"
        >
            <div class="p-4 flex gap-4 justify-between flex-wrap">
                <show-page></show-page>
                <choose-page></choose-page>
            </div>
            <my-product-table></my-product-table>
        </div>
    </base-layout>
</template>

<script>
import BaseLayout from "../Layouts/BaseLayout.vue";
import { Link } from "@inertiajs/vue3";
import ButtonExportCsv from "../Components/Buttons/ButtonExportCsv.vue";
import ShowPage from "../Components/Pagination/ShowPage.vue";
import ChoosePage from "../Components/Pagination/ChoosePage.vue";
import MyProductTable from "../Components/Product/MyProductTable.vue";

export default {
    components: {
        BaseLayout,
        Link,
        ButtonExportCsv,
        ShowPage,
        ChoosePage,
        MyProductTable,
    },
};
</script>
