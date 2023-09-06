<template>
    <auth-header></auth-header>
    <main class="h-full min-h-full md:bg-gray-100 md:h-auto md:pt-32 md:pb-32">
        <slot></slot>
    </main>
</template>

<script>
import AuthHeader from "../Components/AuthHeader.vue";

export default {
    components: {
        AuthHeader,
    },
};
</script>
