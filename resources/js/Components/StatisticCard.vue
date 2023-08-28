<template>
    <div :class="card">
        <span><slot name="title"></slot></span>
        <span :class="cardInfo"><slot name="amount"></slot></span>
    </div>
</template>

<script>
export default {
    props: ["color"],
    computed: {
        card() {
            return `p-2 sm:p-4 rounded text-sm sm:text-base sm:col-span-4 flex flex-wrap gap-1 font-medium border-l-4 shadow border-${this.color}-500 bg-white`;
        },
        cardInfo() {
            return `text-${this.color}-500`;
        },
    },
};
</script>
