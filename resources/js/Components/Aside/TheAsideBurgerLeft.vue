<template>
    <button @click="squezeeAside" class="hidden lg:block w-7 h-7">
        <img src="/images/burger-icon--white.svg" alt="" />
    </button>
</template>

<script>
export default {
    props: ["open"],
    methods: {
        squezeeAside() {
            this.$emit("squezee", !open);
        },
    },
};
</script>
