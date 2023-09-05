<!-- TODO: Не работает, используя Options API -->
<template>
    <vue-magnifier
        class="bg-gray-50 border w-full max-h-80 min-[1368px]:h-80 object-contain rounded cursor-pointer"
        :src="imageSrc"
        mgWidth="110"
        mgHeight="110"
        zoomFactor="2.5"
    />
</template>

<script setup>
import VueMagnifier from "@websitebeaver/vue-magnifier";

const props = defineProps({
    imageSrc: String,
});

import "@websitebeaver/vue-magnifier/styles.css";
</script>
