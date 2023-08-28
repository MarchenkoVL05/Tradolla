<template>
    <Line class="mt-2" :data="data" :options="options" />
</template>

<script>
import { Line } from "vue-chartjs";
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend,
    Filler,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    PointElement,
    LineElement,
    CategoryScale,
    LinearScale,
    Filler
);

export default {
    components: {
        Line,
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
                        label: "Total sales per month",
                        data: [60, 74, 73, 67, 73, 71, 68, 69, 65, 70, 72, 71],
                        borderColor: "#F97316",
                        backgroundColor: "rgba(255, 122, 10, 0.1)",
                        pointBorderWidth: 3,
                        fill: true,
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
