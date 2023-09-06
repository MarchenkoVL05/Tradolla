<template>
    <div
        class="rounded border shadow bg-white"
        :class="{ 'overflow-auto': overflow === true }"
    >
        <h2 class="px-4 py-2 font-semibold bg-slate-50">
            <slot name="title"></slot>
        </h2>
        <slot name="inputs"></slot>
    </div>
</template>

<script>
export default {
    props: {
        overflow: {
            type: Boolean,
            default: true,
        },
    },
};
</script>
