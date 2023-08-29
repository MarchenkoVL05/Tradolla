<template>
    <div class="mt-2 w-full overflow-auto rounded shadow border bg-white">
        <div class="p-4 flex gap-4 justify-between flex-wrap">
            <show-page></show-page>
            <choose-page></choose-page>
        </div>
        <div class="grid grid-cols-7 min-w-[1020px] overflow-auto">
            <table-head-cell-minimal class="col-span-3"
                >Procedure</table-head-cell-minimal
            >
            <table-head-cell-minimal>Published</table-head-cell-minimal>
            <table-head-cell-minimal>Deadline</table-head-cell-minimal>
            <table-head-cell-minimal>Status</table-head-cell-minimal>
            <table-head-cell-minimal>Action</table-head-cell-minimal>
            <my-procurement-table-row
                v-for="index in 10"
                :key="10"
                :index="index"
            ></my-procurement-table-row>
        </div>
    </div>
</template>

<script>
import MyProcurementTableRow from "./MyProcurementTableRow.vue";
import TableHeadCellMinimal from "../TableHeadCellMinimal.vue";
import ShowPage from "../Pagination/ShowPage.vue";
import ChoosePage from "../Pagination/ChoosePage.vue";

export default {
    components: {
        MyProcurementTableRow,
        TableHeadCellMinimal,
        ShowPage,
        ChoosePage,
    },
};
</script>
