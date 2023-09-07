<template>
    <div
        class="flex justify-center items-center text-gray-800 font-medium"
        :class="{ 'flex-col': opened, 'gap-4': opened, 'gap-6': !opened }"
    >
        <a class="transition-all hover:text-orange-500" href="#">Suppliers</a>
        <a class="transition-all hover:text-orange-500" href="#">Customers</a>
        <a class="transition-all hover:text-orange-500" href="#">Help</a>
    </div>
</template>

<script>
export default {
    props: {
        opened: {
            type: Boolean,
            default: false,
        },
    },
};
</script>
