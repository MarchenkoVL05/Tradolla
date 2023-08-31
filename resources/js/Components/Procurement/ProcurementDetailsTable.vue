<template>
    <div>
        <!-- table head -->
        <table-head-cell class="border-l border-t" filter="true"
            >Product or Service</table-head-cell
        >
        <table-head-cell class="border-l border-t"
            >Shipping Address</table-head-cell
        >
        <table-head-cell class="border-l border-t">Quantity</table-head-cell>
        <table-head-cell class="border-l border-t"
            >Price per Unit</table-head-cell
        >
        <table-head-cell class="border-l border-t">Total Cost</table-head-cell>
        <procurement-details-table-row
            v-for="index in 10"
            :key="index"
            :index="index"
            :selected="selected"
        ></procurement-details-table-row>
    </div>
</template>

<script>
import TableHeadCell from "../tableheadcell.vue";
import ProcurementDetailsTableRow from "./ProcurementDetailsTableRow.vue";

export default {
    components: {
        TableHeadCell,
        ProcurementDetailsTableRow,
    },

    props: ["selected"],
};
</script>
