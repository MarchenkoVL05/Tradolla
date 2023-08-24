<template>
    <div class="flex flex-col rounded border mt-2 bg-white">
        <product-list-card
            v-for="i in 10"
            :key="i"
            :index="i"
        ></product-list-card>
        <pagination-list></pagination-list>
    </div>
</template>

<script>
import ProductListCard from "./ProductListCard.vue";
import PaginationList from "../Pagination/PaginationList.vue";

export default {
    components: {
        ProductListCard,
        PaginationList,
    },
};
</script>
