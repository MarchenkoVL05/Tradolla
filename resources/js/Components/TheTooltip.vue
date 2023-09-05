<template>
    <span class="relative flex items-center gap-1">
        <img
            class="peer max-h-4 cursor-pointer"
            src="/images/question-tooltip.svg"
            alt=""
        />
        <slot name="title"></slot>
        <span
            class="invisible opacity-0 peer-hover:visible peer-hover:opacity-95 transition-all absolute -left-2 bottom-8 px-4 py-2 shadow rounded text-white bg-gray-800 tooltip-triangle"
            data-tooltip=""
        >
            <slot name="hint"></slot>
        </span>
    </span>
</template>

<script>
export default {};
</script>
