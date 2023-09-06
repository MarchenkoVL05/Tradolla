<template>
    <the-header></the-header>
    <main class="h-full min-h-full md:bg-gray-100 md:h-auto md:pt-32 md:pb-32">
        <slot></slot>
    </main>
</template>

<script>
import TheHeader from "../components/header/TheHeader.vue";

export default {
    components: {
        TheHeader,
    },
};
</script>
