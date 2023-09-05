<template>
    <page-head><title>Product | Tradolla.com</title></page-head>
    <base-layout>
        <div class="flex gap-3 pb-2 flex-col 2xl:flex-row">
            <div class="max-w-7xl rounded p-4 border bg-white">
                <div class="mb-6 flex gap-4 flex-col min-[1368px]:flex-row">
                    <product-choose-img></product-choose-img>
                    <div>
                        <div
                            class="text-lg sm:text-xl text-gray-800 font-medium"
                        >
                            Apple MacBook Pro (15" Retina, Touch Bar, 2.2GHz
                            6-Core Intel Core i7, 16GB RAM, 256GB SSD) - Space
                            Gray (Latest Model)
                        </div>
                        <product-tags :color="'orange'"></product-tags>
                        <rating-stars class="mt-2"></rating-stars>
                        <div class="mt-2 sm:mt-4 text-gray-500">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Asperiores doloremque, consequuntur iusto
                            alias illum voluptates non harum. Aspernatur earum
                            alias illo blanditiis provident corrupti similique
                            illum omnis sit, quisquam facere.
                        </div>
                        <del class="block mt-2 sm:mt-4 text-xl text-slate-600"
                            >$1300</del
                        >
                        <product-price> $<span>1199.5</span> </product-price>
                        <stock-info class="mt-2"></stock-info>
                        <div
                            class="mt-4 flex items-center flex-wrap gap-2 sm:gap-4"
                        >
                            <button-white class="py-3 px-6">
                                <img src="/images/heart.svg" alt="" /> Favorite
                            </button-white>
                            <button-orange class="py-3 px-6">
                                <img src="/images/contact_us.svg" alt="" />
                                Contact Us
                            </button-orange>
                        </div>
                    </div>
                </div>
                <tabs>
                    <tab name="Description">
                        <product-full-info
                            class="mt-4 pb-4"
                        ></product-full-info>
                    </tab>
                    <tab name="Specifications">
                        <product-specifications
                            class="mt-4"
                        ></product-specifications>
                    </tab>
                    <tab name="Reviews">
                        <div class="mt-4 text-sm sm:text-base">
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-8"
                            >
                                <div class="flex flex-col gap-4">
                                    <comment-with-rating
                                        v-for="index in 3"
                                        :key="index"
                                        class="pb-4"
                                    ></comment-with-rating>
                                </div>
                                <div>
                                    <div
                                        class="text-lg sm:text-xl font-semibold text-gray-800"
                                    >
                                        Write your Review
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <span
                                            class="mt-2 sm:mt-4 text-lg text-gray-600"
                                            >Rating:</span
                                        >
                                        <rating-stars-choose></rating-stars-choose>
                                    </div>
                                    <form-review></form-review>
                                </div>
                            </div>
                        </div>
                    </tab>
                </tabs>
            </div>
            <div class="flex gap-3 flex-col sm:flex-row 2xl:flex-col">
                <seller-card></seller-card>
                <div
                    class="2xl:h-full w-full 2xl:max-w-sm min-w-[220px] rounded border p-4 bg-white"
                >
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.5620249215126!2d58.49017452510491!3d51.22714340599063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x417ffa30ce7e2269%3A0x679025c6b75b0fee!2z0YPQuy4g0JvQtdC90LjQvdGB0LrQvtCz0L4g0JrQvtC80YHQvtC80L7Qu9CwLCAxLCDQntGA0YHQuiwg0J7RgNC10L3QsdGD0YDQs9GB0LrQsNGPINC-0LHQuy4sIDQ2MjQyOA!5e0!3m2!1sru!2sru!4v1690259668591!5m2!1sru!2sru"
                        width="100%"
                        height="100%"
                        allowfullscreen="true"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Tabs, Tab } from "vue3-tabs-component";
import { Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import StockInfo from "../Components/StockInfo.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";
import ButtonWhite from "../Components/Buttons/ButtonWhite.vue";
import ProductPrice from "../Components/Product/ProductPrice.vue";
import RatingStars from "../Components/RatingStars.vue";
import RatingStarsChoose from "../Components/RatingStarsChoose.vue";
import SellerCard from "../Components/SellerCard.vue";
import ProductFullInfo from "../Components/Product/ProductFullInfo.vue";
import ProductSpecifications from "../Components/Product/ProductSpecifications.vue";
import FormReview from "../Components/Forms/FormReview.vue";
import CommentWithRating from "../Components/CommentWithRating.vue";
import ProductTags from "../Components/Product/ProductTags.vue";
import ProductChooseImg from "../Components/Product/ProductChooseImg.vue";

export default {
    components: {
        PageHead,
        Tabs,
        Tab,
        Link,
        BaseLayout,
        StockInfo,
        ButtonOrange,
        ButtonWhite,
        ProductPrice,
        RatingStars,
        RatingStarsChoose,
        SellerCard,
        ProductFullInfo,
        ProductSpecifications,
        FormReview,
        CommentWithRating,
        ProductTags,
        ProductChooseImg,
    },
};
</script>
