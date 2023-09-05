<template>
    <div class="p-4 border rounded shadow bg-white">
        <div class="text-lg font-bold text-gray-800">
            Purchase position
            <span class="text-orange-500">#1</span>
        </div>
        <div class="mt-4 flex flex-col gap-1">
            <div class="font-medium text-gray-800">
                What product or service you need?
            </div>
            <base-input></base-input>
        </div>
        <div class="mt-4 flex flex-col gap-1">
            <the-tooltip>
                <template #title>
                    <span class="font-medium text-gray-800">
                        Choose category
                    </span>
                </template>
                <template #hint>
                    In the chosen category, suppliers will be able to find your
                    post
                </template>
            </the-tooltip>
            <div class="flex flex-col gap-2 sm:gap-3">
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >1 level</span
                    >
                    <v-select class="w-full" :options="firstLevel"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >2 level</span
                    >
                    <v-select class="w-full" :options="firstLevel"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >3 level</span
                    >
                    <v-select class="w-full" :options="firstLevel"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >4 level</span
                    >
                    <v-select class="w-full" :options="firstLevel"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >5 level</span
                    >
                    <v-select class="w-full" :options="firstLevel"></v-select>
                </div>
            </div>
        </div>
        <div class="mt-4 flex flex-col gap-1">
            <the-tooltip>
                <template #title>
                    <span class="font-medium text-gray-800">
                        Delivery or service address
                    </span>
                </template>
                <template #hint>
                    In the chosen address, suppliers will be able to find your
                    post
                </template>
            </the-tooltip>
            <div class="flex flex-col gap-2 sm:gap-3">
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >Region 1</span
                    >
                    <v-select class="w-full" :options="regionOne"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >Region 2</span
                    >
                    <v-select class="w-full" :options="regionOne"></v-select>
                </div>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-2 sm:gap-4 items-center"
                >
                    <span class="text-sm sm:text-base flex-shrink-0"
                        >Region 3</span
                    >
                    <v-select class="w-full" :options="regionOne"></v-select>
                </div>
            </div>
        </div>
        <div class="mt-4 flex-wrap sm:flex-nowrap flex gap-2 sm:gap-6">
            <div class="flex flex-col gap-1">
                <div class="font-medium text-gray-800">Quantity</div>
                <div class="flex">
                    <input
                        class="w-24 px-2 py-1 border rounded-l focus:outline-none focus:border-orange-600"
                        type="number"
                    />
                    <select
                        class="px-2 rounded-r border-t border-b border-r font-medium focus:outline-none"
                    >
                        <option value="pcs">pcs</option>
                        <option value="kg">kg</option>
                        <option value="gram">gram</option>
                        <option value="liter">liter</option>
                        <option value="m">m</option>
                        <option value="cm">cm</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <div class="font-medium text-gray-800">Price per Unit</div>
                <div class="flex">
                    <input
                        class="w-24 px-2 py-1 border rounded-l focus:outline-none focus:border-orange-600"
                        type="number"
                    />
                    <select
                        class="px-2 rounded-r border-t border-b border-r font-medium focus:outline-none"
                    >
                        <option value="pcs">$</option>
                        <option value="kg">€</option>
                        <option value="gram">¥</option>
                        <option value="liter">£</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-end">
            <button-black class="py-2 px-4"> Add to table </button-black>
        </div>
    </div>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonBlack from "../Buttons/ButtonBlack.vue";
import TheTooltip from "../TheTooltip.vue";
import vSelect from "vue-select";

export default {
    components: {
        BaseInput,
        ButtonBlack,
        TheTooltip,
        vSelect,
    },

    data() {
        return {
            firstLevel: [
                "Raw Materials, Chemicals, Paper, Fuel",
                "Industrial Equipment & Tools",
                "Components & Supplies",
                "Construction, Transportation & Facility Equipment & Supplies",
                "Medical, Laboratory & Test Equipment & Supplies & Pharmaceuticals",
                "Food, Cleaning & Service Industry Equipment & Supplies",
                "Business, Communication & Technology Equipment & Supplies",
                "Defense, Security & Safety Equipment & Supplies",
                "Personal, Domestic & Consumer Equipment & Supplies",
                "Services",
            ],
            regionOne: [
                "Eastern Europe",
                "West Europe",
                "Middle East",
                "South America",
                "North America",
                "Africa",
            ],
            quantity: ["pcs", "kg", "gram", "liter", "m", "cm"],
            ppu: ["$", "€", "¥", "£"],
        };
    },
};
</script>
