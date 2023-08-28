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
            let colorClasses = "";
            if (this.color === "green") {
                colorClasses = "border-green-500 bg-white";
            } else if (this.color === "orange") {
                colorClasses = "border-orange-500 bg-white";
            } else if (this.color === "red") {
                colorClasses = "border-red-500 bg-white";
            }
            return `${baseClasses} ${colorClasses}`;
        },
        cardText() {
            let colorClass = "";
            if (this.color === "green") {
                colorClass = "text-green-500";
            } else if (this.color === "orange") {
                colorClass = "text-orange-500";
            } else if (this.color === "red") {
                colorClass = "text-red-500";
            }
            return colorClass;
        },
    },
};
</script>
