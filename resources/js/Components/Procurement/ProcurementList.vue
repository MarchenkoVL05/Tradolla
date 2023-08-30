<template>
    <div
        v-for="index in 10"
        :key="index"
        class="group relative col-span-8 grid grid-cols-8 border-b transition-all border-gray-200 hover:border-orange-300"
    >
        <div
            class="group-hover:opacity-100 opacity-0 absolute left-0 h-full w-1 transition-all bg-orange-300"
        ></div>
        <div class="col-span-4 p-4" :class="{ 'bg-gray-50': index % 2 == 0 }">
            <div class="flex items-center gap-4">
                <request-favorite :star="true"></request-favorite>
            </div>
            <procurement-list-title
                >Construction Services for Office Expansion Project
            </procurement-list-title>
            <procurement-list-category-and-region></procurement-list-category-and-region>
        </div>
        <a
            class="col-span-2 flex items-center p-4 text-blue-500 hover:text-slate-800"
            :class="{ 'bg-gray-50': index % 2 == 0 }"
            href="./company.html"
            >Chunghwa Telecom Ltd.</a
        >
        <span
            class="col-span-1 p-4 text-sm xl:text-base flex items-center"
            :class="{ 'bg-gray-50': index % 2 == 0 }"
            >12 april 2023</span
        >
        <span
            class="col-span-1 p-4 text-sm xl:text-base flex items-center"
            :class="{ 'bg-gray-50': index % 2 == 0 }"
            >31 december 2023</span
        >
    </div>
</template>

<script>
import ProcurementListCategoryAndRegion from "./ProcurementListCategoryAndRegion.vue";
import ProcurementListTitle from "../Procurement/ProcurementListTitle.vue";
import RequestFavorite from "../RequestFavorite.vue";

export default {
    components: {
        ProcurementListCategoryAndRegion,
        ProcurementListTitle,
        RequestFavorite,
    },
};
</script>
