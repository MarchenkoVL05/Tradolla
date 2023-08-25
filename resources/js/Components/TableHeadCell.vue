<template>
    <div
        class="px-4 py-2 border-b border-r font-medium flex items-center"
        :class="{ 'justify-between': filter, 'gap-4': filter }"
    >
        <slot></slot>
        <div v-if="filter" class="flex flex-col">
            <button
                class="flex items-end text-[12px] text-gray-800 hover:text-orange-500"
            >
                &#9650;
            </button>
            <button
                class="flex items-start text-[12px] text-gray-800 hover:text-orange-500"
            >
                &#9660;
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: ["filter"],
};
</script>
