<template>
    <div
        class="mt-2 items-center flex-wrap gap-2"
        :class="{
            'text-gray-400': color == 'gray',
            'text-sm': color == 'gray',
            'text-orange-500': color == 'orange',
        }"
    >
        <a href="#"> apple </a>
        &
        <a href="#"> laptop </a>
        &
        <a href="#"> iMac </a>
    </div>
</template>

<script>
export default {
    props: {
        color: {
            type: String,
            default: "gray",
        },
    },
};
</script>
