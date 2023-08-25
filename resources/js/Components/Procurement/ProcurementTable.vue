<template>
    <div
        class="mt-4 w-full overflow-auto rounded border text-gray-800 bg-white"
    >
        <!-- Table -->
        <div class="grid grid-cols-8 min-w-[1020px] overflow-auto">
            <table-head-cell class="col-span-4">Procedure</table-head-cell>
            <table-head-cell class="col-span-2">Company</table-head-cell>
            <table-head-cell class="col-span-1" :filter="true"
                >Published</table-head-cell
            >
            <table-head-cell class="col-span-1">Deadline</table-head-cell>
            <!-- table row -->
            <procurement-list></procurement-list>
        </div>
    </div>
</template>

<script>
import ProcurementList from "./ProcurementList.vue";
import TableHeadCell from "../TableHeadCell.vue";

export default {
    components: {
        ProcurementList,
        TableHeadCell,
    },
};
</script>
