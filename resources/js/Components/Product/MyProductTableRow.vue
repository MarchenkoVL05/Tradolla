<template>
    <div
        class="col-span-12 grid grid-cols-12"
        :class="{ 'bg-gray-50': index % 2 == 0 }"
    >
        <div class="col-span-6 px-4 py-2 flex items-center gap-4">
            <a class="flex-shrink-0" href="./product-details.html">
                <img
                    class="w-24 h-24 rounded object-contain"
                    src="/images/example-3.jpg"
                    alt=""
                />
            </a>
            <div class="flex flex-col gap-1">
                <product-tags></product-tags>
                <div class="flex flex-col gap-3">
                    <a
                        class="text-gray-800 font-medium hover:underline"
                        href="./product-details.html"
                        >Apple MacBook Pro (15" Retina, Touch Bar, 2.2GHz 6-Core
                        Intel Core i7, 16GB RAM, 256GB SSD) - Space Gray (Latest
                        Model)
                    </a>
                </div>
                <rating-stars :size="'small'"></rating-stars>
            </div>
        </div>
        <div class="col-span-2 px-4 py-2 flex items-center text-gray-800">
            1099
        </div>
        <div class="col-span-1 px-4 py-2 flex items-center text-gray-800"></div>
        <div class="col-span-2 px-4 py-2 flex items-center text-gray-800">
            1099
        </div>
        <div class="col-span-1 px-4 py-2 flex">
            <action-btns></action-btns>
        </div>
    </div>
</template>

<script>
import ActionBtns from "../ActionBtns.vue";
import ProductTags from "./ProductTags.vue";
import RatingStars from "../RatingStars.vue";

export default {
    props: ["index"],
    components: {
        ActionBtns,
        ProductTags,
        RatingStars,
    },
};
</script>
