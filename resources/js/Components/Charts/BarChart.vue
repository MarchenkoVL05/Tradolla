<template>
    <Bar :data="data" :options="options"></Bar>
</template>

<script>
import { Bar } from "vue-chartjs";

import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
);

export default {
    components: {
        Bar,
    },

    data() {
        return {
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sept",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [
                    {
                        label: "Number of deals per month totaling",
                        data: [12, 19, 3, 5, 2, 3, 7, 12, 9, 6, 10, 4],
                        borderWidth: 1,
                        backgroundColor: "#F97316",
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                responsive: true,
            },
        };
    },
};
</script>
