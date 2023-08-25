<template>
    <div
        :class="`p-2 sm:p-4 rounded text-sm sm:text-base sm:col-span-4 flex flex-wrap gap-1 font-medium border-l-4 shadow border-${color}-500 bg-white`"
    >
        <span><slot name="title"></slot></span>
        <span :class="`text-${color}-500`"><slot name="amount"></slot></span>
    </div>
</template>

<script>
export default {
    props: ["color"],
};
</script>
