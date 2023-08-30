<template>
    <div
        class="flex flex-col justify-between mx-auto min-[1120px]:mx-0 min-[1370px]:max-w-xs h-full rounded shadow text-gray-500 bg-white"
    >
        <div>
            <Link class="relative" href="#">
                <img
                    class="w-full max-h-52 object-contain rounded-t bg-gray-50"
                    src="/images/example-3.jpg"
                    alt=""
                />
            </Link>
            <div class="p-2">
                <Link
                    class="inline-block text-sm uppercase hover:underline"
                    href="#"
                    >Fubon Financial Holding Co. Ltd</Link
                >
                <Link
                    class="inline-block text-base font-semibold text-gray-800 hover:underline"
                    href="#"
                    >Apple MacBook Pro (15" Retina, Touch Bar, 2.2GHz 6-Core
                    Intel Core i7, 16GB RAM, 256GB SSD) - Space Gray (Latest
                    Model)
                </Link>
            </div>
        </div>
        <div class="p-2">
            <div class="flex flex-col gap-1">
                <div class="text-xl text-gray-800">$1300</div>
            </div>
            <div class="mt-1 flex items-end justify-between gap-4">
                <div class="flex flex-col gap-1">
                    <stock-info></stock-info>
                    <rating-stars></rating-stars>
                </div>
                <div class="flex items-center gap-3">
                    <button-orange class="p-2">
                        <img
                            class="w-5 h-5"
                            src="/images/contact_us.svg"
                            alt=""
                        />
                    </button-orange>
                    <button-white class="p-2" @click="addToFavorite">
                        <img
                            class="w-5 h-5"
                            :src="
                                addedToFav
                                    ? '/images/heart--fill.svg'
                                    : '/images/heart.svg'
                            "
                            alt=""
                        />
                    </button-white>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import RatingStars from "../RatingStars.vue";
import StockInfo from "../StockInfo.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import ButtonWhite from "../Buttons/ButtonWhite.vue";

export default {
    props: ["favorite"],
    components: {
        Link,
        RatingStars,
        StockInfo,
        ButtonOrange,
        ButtonWhite,
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
