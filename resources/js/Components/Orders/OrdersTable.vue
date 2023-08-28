<template>
    <div class="w-full overflow-auto">
        <!-- Table -->
        <div
            class="grid grid-cols-4 min-w-[700px] rounded border-x shadow bg-white"
        >
            <!-- table-head -->
            <orders-table-head></orders-table-head>
            <!-- table rows -->
            <orders-table-row
                v-for="index in 20"
                :index="index"
                :key="index"
            ></orders-table-row>
        </div>
    </div>
</template>

<script>
import OrdersTableHead from "./OrdersTableHead.vue";
import OrdersTableRow from "./OrdersTableRow.vue";

export default {
    components: {
        OrdersTableHead,
        OrdersTableRow,
    },
};
</script>
