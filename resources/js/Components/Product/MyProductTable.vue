<template>
    <div class="grid grid-cols-12 min-w-[1130px] overflow-auto">
        <table-head-cell class="col-span-6 border-t" :filter="true">
            Product Info
        </table-head-cell>
        <table-head-cell class="col-span-2 border-t" :filter="true">
            Base Price (USD)
        </table-head-cell>
        <table-head-cell class="col-span-1 border-t" :filter="false">
            Discount
        </table-head-cell>
        <table-head-cell class="col-span-2 border-t" :filter="true">
            Final Price (USD)
        </table-head-cell>
        <table-head-cell class="col-span-1 border-t" :filter="false">
            Action
        </table-head-cell>
        <!-- our products rows -->
        <my-product-table-row
            v-for="index in 10"
            :key="index"
            :index="index"
        ></my-product-table-row>
    </div>
</template>

<script>
import TableHeadCell from "../TableHeadCell.vue";
import MyProductTableRow from "../Product/MyProductTableRow.vue";

export default {
    components: {
        TableHeadCell,
        MyProductTableRow,
    },
};
</script>
