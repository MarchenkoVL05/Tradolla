<template>
    <product-grid-template class="mt-2">
        <product-card v-for="index in 10" :key="index"></product-card>
    </product-grid-template>
</template>

<script>
import ProductGridTemplate from "./ProductGridTemplate.vue";
import ProductCard from "./ProductCard.vue";

export default {
    components: {
        ProductGridTemplate,
        ProductCard,
    },
};
</script>
