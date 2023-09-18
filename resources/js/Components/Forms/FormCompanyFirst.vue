<template>
    <form
        class="relative mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-sm md:shadow"
    >
        <div
            class="absolute top-0 left-0 w-1/6 h-1 rounded-lg bg-orange-500"
        ></div>
        <h1 class="font-bold text-center text-2xl text-gray-800">
            Company registration
        </h1>
        <p class="mt-2 text-base text-gray-600">
            First you need to specify the name and location of your company.
            This name will be displayed on the marketplace and will help
            customers learn about your company.
        </p>
        <label class="flex flex-col mt-4 text-gray-600">
            Company name
            <base-input class="mt-2 py-2" />
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            Country
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

export default {
    components: {
        BaseInput,
        ButtonOrange,
    },

    methods: {
        nextForm(e) {
            e.preventDefault();
            this.$emit("next-form");
        },
    },
};
</script>
