<template>
    <div class="lg:flex lg:h-full">
        <the-aside></the-aside>
        <div class="w-full flex flex-col">
            <the-header></the-header>
            <main class="h-full p-3">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
import TheHeader from "../Components/Header/TheHeader.vue";
import TheAside from "../Components/Aside/TheAside.vue";

export default {
    components: {
        TheHeader,
        TheAside,
    },
    data() {
        return {};
    },
};
</script>
