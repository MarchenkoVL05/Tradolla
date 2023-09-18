<template>
    <form
        class="relative mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-sm md:shadow"
    >
        <div
            class="absolute top-0 left-0 w-2/6 h-1 rounded-lg bg-orange-500"
        ></div>
        <h1 class="font-bold text-center text-2xl text-gray-800">
            Company registration
        </h1>
        <label class="flex flex-col mt-4 text-gray-600">
            <the-tooltip>
                <template #title>Company Registration Number</template>
                <template #hint>CRN in the UK, EIN in the USA etc.</template>
            </the-tooltip>
            <base-input class="mt-2 py-2" />
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            <the-tooltip>
                <template #title>Taxpayer Identification Number</template>
                <template #hint
                    >Unique number that is assigned to a company or individual
                    to account for tax payments.</template
                >
            </the-tooltip>
            <base-input class="mt-2 py-2" />
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            <the-tooltip>
                <template #title>DUNS-number (if available)</template>
                <template #hint
                    >Unique nine-digit identification code assigned to companies
                    in the international D&B database.</template
                >
            </the-tooltip>
            <base-input class="mt-2 py-2" />
        </label>
        <button-orange
            @click="nextForm($event)"
            class="w-full px-4 py-3 mt-5 font-medium"
        >
            Next
            <img class="max-h-5" src="/images/arrow-btn-right.svg" alt="" />
        </button-orange>
    </form>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import TheTooltip from "../TheTooltip.vue";

export default {
    components: {
        BaseInput,
        ButtonOrange,
        TheTooltip,
    },

    methods: {
        nextForm(e) {
            e.preventDefault();
            this.$emit("next-form");
        },
    },
};
</script>
