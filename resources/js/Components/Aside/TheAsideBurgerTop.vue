<template>
    <button @click="openMenu" class="w-7 h-7 lg:hidden">
        <img src="/images/burger-icon--white.svg" alt="" />
    </button>
</template>

<script>
export default {
    props: ["open"],
    methods: {
        openMenu() {
            this.$emit("openTop", !open);
        },
    },
};
</script>
