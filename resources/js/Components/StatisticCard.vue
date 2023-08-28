<template>
    <div :class="cardBorder">
        <span><slot name="title"></slot></span>
        <span :class="cardText"><slot name="amount"></slot></span>
    </div>
</template>

<script>
export default {
    props: ["color"],
    computed: {
        cardBorder() {
            const baseClasses =
                "p-2 sm:p-4 rounded text-sm sm:text-base sm:col-span-4 flex flex-wrap gap-1 font-medium border-l-4 shadow";
            const colorClass = this.getColorClass(this.color, "border");

            return `${baseClasses} ${colorClass}`;
        },
        cardText() {
            return this.getColorClass(this.color, "text");
        },
    },
    methods: {
        getColorClass(color, prefix) {
            const colorMap = {
                green: `${prefix}-green-500 ${
                    prefix == "border" ? "bg-white" : ""
                }`,
                slate: `${prefix}-slate-500 ${
                    prefix == "border" ? "bg-white" : ""
                }`,
                red: `${prefix}-red-500 ${
                    prefix == "border" ? "bg-white" : ""
                }`,
            };
            return colorMap[color] || "";
        },
    },
};
</script>
