<template>
    <page-head><title>New product | Tradolla.com</title></page-head>
    <base-layout>
        <div class="pb-2">
            <product-new-btns>
                <template #title>Add a product</template>
            </product-new-btns>
            <div
                class="grid xl:grid-cols-12 mt-4 items-start gap-3 text-gray-800"
            >
                <div class="xl:col-span-9 w-full max-w-7xl flex flex-col gap-4">
                    <form-box>
                        <template #title>Basic information</template>
                        <template #inputs>
                            <div class="px-4 py-2 flex flex-col gap-1">
                                <div class="text-gray-800">Product name</div>
                                <base-input autofocus></base-input>
                            </div>
                            <div class="px-4 py-2 flex flex-col gap-1">
                                <div class="text-gray-800">Description</div>
                                <textarea
                                    class="px-2 py-1 border rounded focus:outline-none focus:border-orange-600"
                                    rows="5"
                                ></textarea>
                            </div>
                        </template>
                    </form-box>
                    <form-box>
                        <template #title>Add images</template>
                        <template #inputs>
                            <div class="p-4">
                                <div
                                    class="h-16 sm:h-20 flex items-center gap-2 justify-center flex-wrap mx-auto w-full border rounded border-gray-400 border-dashed text-gray-500"
                                >
                                    Drag you images or
                                    <span class="text-orange-500"> browse</span>
                                </div>
                            </div>
                        </template>
                    </form-box>
                    <product-new-specifications></product-new-specifications>
                </div>
                <div class="xl:col-span-3 gap-4 flex flex-col h-full">
                    <product-new-type :overflow="false"></product-new-type>
                    <form-box>
                        <template #title>Tags</template>
                        <template #inputs>
                            <div class="px-4 py-2 flex flex-col gap-1">
                                <div class="text-gray-800">Add a keywords:</div>
                                <base-input></base-input>
                            </div>
                        </template>
                    </form-box>
                    <product-new-pricing></product-new-pricing>
                    <div class="border rounded shadow bg-white">
                        <div class="px-4 py-2 font-medium rounded bg-gray-50">
                            Stock status:
                        </div>
                        <div class="px-4 py-2 flex flex-col gap-2">
                            <label
                                class="flex items-center gap-2 text-lg text-gray-800"
                            >
                                <input name="status" type="radio" />
                                In stock
                            </label>
                            <label
                                class="flex items-center gap-2 text-lg text-gray-800"
                            >
                                <input name="status" type="radio" />
                                Unavailable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <product-new-btns class="mt-4">
                <template #title>You're almost done</template>
            </product-new-btns>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProductNewBtns from "../Components/Product/ProductNewBtns.vue";
import ProductNewSpecifications from "../Components/Product/ProductNewSpecifications.vue";
import ProductNewType from "../Components/Product/ProductNewType.vue";
import ProductNewPricing from "../Components/Product/ProductNewPricing.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import BaseInput from "../Components/Inputs/BaseInput.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        ProductNewBtns,
        ProductNewSpecifications,
        ProductNewPricing,
        ProductNewType,
        FormBox,
        BaseInput,
    },
};
</script>
