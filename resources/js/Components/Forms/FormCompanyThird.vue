<template>
    <form
        action="javascript: window.location.href='company-register-4.html'"
        class="relative mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-sm md:shadow"
    >
        <div
            class="absolute top-0 left-0 w-3/6 h-1 rounded-lg bg-orange-500"
        ></div>
        <h1 class="font-bold text-center text-2xl text-gray-800">
            Company registration
        </h1>
        <label class="flex flex-col mt-4 text-gray-600">
            Your legal address (headquarters)
            <base-input class="mt-2 py-2"></base-input>
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            Year of foundation
            <base-input class="mt-2 py-2" type="date"></base-input>
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            <the-tooltip>
                <template #title>Full-time staff</template>
                <template #hint>Number of employees</template>
            </the-tooltip>
            <base-input class="mt-2 py-2" type="number"></base-input>
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            Annual income (USD)
            <base-input class="mt-2 py-2" type="number"></base-input>
        </label>
        <button-orange class="w-full mt-5 px-4 py-3 font-medium">
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
};
</script>
