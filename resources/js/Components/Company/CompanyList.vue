<template>
    <div class="mt-2 p-4 rounded border bg-white">
        <div
            class="grid gap-4 items-start grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5"
        >
            <company-card
                v-for="index in 20"
                :key="index"
                :index="index"
            ></company-card>
        </div>
    </div>
</template>

<script>
import CompanyCard from "./CompanyCard.vue";

export default {
    components: {
        CompanyCard,
    },
};
</script>
