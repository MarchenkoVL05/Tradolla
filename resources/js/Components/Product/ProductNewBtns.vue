<template>
    <div
        class="flex sm:justify-between justify-center items-center flex-wrap gap-2 sm:gap-4 px-4 py-2 border rounded shadow text-gray-800 bg-white"
    >
        <h1 class="hidden sm:block text-lg font-semibold">
            <slot name="title"></slot>
        </h1>
        <div class="flex items-center gap-1">
            <button
                class="px-4 py-1 sm:text-lg transition-all hover:text-orange-500"
            >
                Discard
            </button>
            <button-orange class="px-4 py-1">Save</button-orange>
        </div>
    </div>
</template>

<script>
import ButtonOrange from "../Buttons/ButtonOrange.vue";

export default {
    components: {
        ButtonOrange,
    },
};
</script>
