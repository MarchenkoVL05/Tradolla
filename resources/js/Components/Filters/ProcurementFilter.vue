<template>
    <base-filter class="p-3">
        <form
            class="flex items-end justify-between flex-wrap md:flex-nowrap lg:flex-wrap xl:flex-nowrap gap-4 text-gray-500"
            action=""
        >
            <div class="flex items-end gap-4 w-full">
                <label class="flex flex-col gap-1 w-full">
                    <span
                        >Enter product and service category or
                        <button
                            class="text-orange-500 cursor-pointer hover:underline"
                        >
                            browse
                        </button>
                    </span>
                    <base-input></base-input>
                </label>
            </div>
            <div class="flex items-end gap-4 w-full">
                <label class="flex flex-col gap-1 w-full">
                    <span
                        >Enter location or
                        <button
                            class="text-orange-500 cursor-pointer hover:underline"
                        >
                            browse
                        </button>
                    </span>
                    <base-input></base-input>
                </label>
            </div>
            <button-black>Search</button-black>
        </form>
    </base-filter>
</template>

<script>
import BaseFilter from "../Filters/BaseFilter.vue";
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonBlack from "../Buttons/ButtonBlack.vue";

export default {
    components: {
        BaseFilter,
        BaseInput,
        ButtonBlack,
    },
};
</script>
