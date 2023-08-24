<template>
    <div
        class="flex flex-col gap-2 flex-shrink-0 rounded bg-white md:gap-0 md:justify-between md:w-64 md:h-64 md:p-5 md:border"
    >
        <div class="text-2xl text-slate-800">$<span>799</span></div>
        <rating-stars></rating-stars>
        <stock-info></stock-info>

        <button-white>
            <img src="/images/heart.svg" alt="" /> Favorite
        </button-white>

        <button-orange>
            <img src="/images/contact_us.svg" alt="" /> Contact Us
        </button-orange>
    </div>
</template>

<script>
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import ButtonWhite from "../Buttons/ButtonWhite.vue";
import StockInfo from "../StockInfo.vue";
import RatingStars from "../RatingStars.vue";

export default {
    components: {
        ButtonOrange,
        ButtonWhite,
        StockInfo,
        RatingStars,
    },
};
</script>
