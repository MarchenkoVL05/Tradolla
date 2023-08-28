<template>
    <page-head><title>Notifications | Tradolla.com</title></page-head>
    <base-layout>
        <notifications-table></notifications-table>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import NotificationsTable from "../Components/Notifications/NotificationsTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        NotificationsTable,
    },
};
</script>
