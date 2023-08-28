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
            <div class="col-span-3 px-4 py-2 border-b font-semibold">Order</div>
            <div class="col-span-7 px-4 py-2 border-b font-semibold">Offer</div>
            <div class="col-span-2 px-4 py-2 border-b font-semibold">
                Action
            </div>
            <orders-preview-table-row></orders-preview-table-row>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import OrdersPreviewTableRow from "./OrdersPreviewTableRow.vue";

export default {
    components: {
        Link,
        OrdersPreviewTableRow,
    },
};
</script>
