<template>
    <div
        class="flex flex-col gap-2 flex-shrink-0 rounded bg-white md:gap-0 md:justify-between md:w-64 md:h-64 md:p-5 md:border"
    >
        <product-price>799</product-price>
        <rating-stars :size="'big'"></rating-stars>
        <stock-info></stock-info>

        <button-white class="py-3" @click="addToFavorite">
            <img
                :src="
                    addedToFav ? '/images/heart--fill.svg' : '/images/heart.svg'
                "
                alt=""
            />
            Favorite
        </button-white>

        <button-orange class="py-3">
            <img src="/images/contact_us.svg" alt="" /> Contact Us
        </button-orange>
    </div>
</template>

<script>
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import ButtonWhite from "../Buttons/ButtonWhite.vue";
import StockInfo from "../StockInfo.vue";
import RatingStars from "../RatingStars.vue";
import ProductPrice from "./ProductPrice.vue";

export default {
    components: {
        ButtonOrange,
        ButtonWhite,
        StockInfo,
        RatingStars,
        ProductPrice,
    },
    data() {
        return {
            addedToFav: false,
        };
    },
    methods: {
        addToFavorite() {
            this.addedToFav = !this.addedToFav;
        },
    },
};
</script>
