<template>
    <div
        class="mt-2 pb-4 grid gap-4 sm grid-cols-1 min-[586px]:grid-cols-2 min-[850px]:grid-cols-3 lg:grid-cols-2 min-[1120px]:grid-cols-3 min-[1370px]:grid-cols-4 min-[1675px]:grid-cols-5"
    >
        <product-card v-for="index in 10" :key="index"></product-card>
    </div>
</template>

<script>
import ProductCard from "./ProductCard.vue";

export default {
    components: {
        ProductCard,
    },
};
</script>
