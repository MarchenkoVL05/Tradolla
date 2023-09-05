<template>
    <div class="flex items-center gap-2">
        <img
            v-for="(star, index) in 5"
            :key="index"
            class="h-5 sm:h-7 cursor-pointer hover:rotate-45 transition-all"
            :src="getStarIcon(index)"
            alt=""
            @click="setRating(index + 1)"
        />
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedRating: 0,
        };
    },
    methods: {
        setRating(rating) {
            this.selectedRating = rating;
        },
        getStarIcon(index) {
            return index < this.selectedRating
                ? "/images/star--fill.svg"
                : "/images/star.svg";
        },
    },
};
</script>
