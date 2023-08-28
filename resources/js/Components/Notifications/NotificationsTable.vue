<template>
    <div class="mt-2 flex flex-col rounded shadow border bg-white">
        <div
            class="p-4 flex justify-between flex-wrap gap-2 border-b rounded-t-lg text-gray-800 bg-gray-50"
        >
            <h1 class="font-semibold sm:text-lg">Your notifications</h1>
            <button class="text-orange-500">Mark all as read</button>
        </div>
        <notifications-table-row
            v-for="index in 10"
            :key="index"
            :seen="index == 1 || index == 2 || index == 3 ? false : true"
            :class="{ 'bg-gray-50': index % 2 == 0 }"
        ></notifications-table-row>
    </div>
</template>

<script>
import NotificationsTableRow from "./NotificationsTableRow.vue";

export default {
    components: {
        NotificationsTableRow,
    },
};
</script>
