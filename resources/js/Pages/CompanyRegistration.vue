<template>
    <page-head><title>Company registration | Tradolla.com</title></page-head>
    <auth-layout></auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";

export default {
    components: {
        PageHead,
        AuthLayout,
    },
};
</script>
