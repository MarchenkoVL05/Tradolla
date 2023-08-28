<template>
    <Doughnut class="mt-2" :data="data" :options="options" />
</template>

<script>
import { Doughnut } from "vue-chartjs";
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from "chart.js";

ChartJS.register(ArcElement, Tooltip, Legend);

export default {
    components: {
        Doughnut,
    },

    data() {
        return {
            data: {
                labels: [
                    "Office Equipment",
                    "Construction equipment",
                    "Electronics",
                ],
                datasets: [
                    {
                        label: "Total sales per month",
                        data: [190, 120, 80],
                        backgroundColor: ["#353596", "#5f5fb6", "#8b8bd8"],
                        hoverOffset: 4,
                    },
                ],
            },
            options: {
                animation: {
                    duration: 1000,
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        };
    },
};
</script>
