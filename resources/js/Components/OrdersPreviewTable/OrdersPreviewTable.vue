<template>
    <div class="py-4 rounded-md border overflow-auto shadow bg-white">
        <div class="px-4 flex justify-between gap-4">
            <div class="flex justify-between gap-4 sm:text-lg font-bold">
                Purchase orders:
            </div>
            <Link class="hover:underline" href="/procurements/orders">
                View all
            </Link>
        </div>
        <div class="mt-2 grid grid-cols-12 text-sm sm:text-base min-w-[686px]">
            <table-head-cell-minimal class="col-span-3"
                >Order</table-head-cell-minimal
            >
            <table-head-cell-minimal class="col-span-7"
                >Offer</table-head-cell-minimal
            >
            <table-head-cell-minimal class="col-span-2"
                >Action</table-head-cell-minimal
            >
            <orders-preview-table-row></orders-preview-table-row>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import OrdersPreviewTableRow from "./OrdersPreviewTableRow.vue";
import TableHeadCellMinimal from "../TableHeadCellMinimal.vue";

export default {
    components: {
        Link,
        OrdersPreviewTableRow,
        TableHeadCellMinimal,
    },
};
</script>
