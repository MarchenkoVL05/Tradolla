<template>
    <div class="rounded border shadow overflow-auto bg-white">
        <h2 class="px-4 py-2 font-semibold bg-slate-50">
            <slot name="title"></slot>
        </h2>
        <slot name="inputs"></slot>
    </div>
</template>

<script>
export default {};
</script>
