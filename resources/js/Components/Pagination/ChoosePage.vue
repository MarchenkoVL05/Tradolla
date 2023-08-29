<template>
    <div class="flex items-center gap-2">
        Page
        <input
            class="w-10 px-1 border rounded focus:outline-none focus:border-orange-600"
            type="text"
            value="1"
        />
        of <span class="font-medium">124</span>
        <div class="flex gap-1">
            <button
                class="px-2 py-1 flex items-center border rounded transition-all hover:border-orange-500"
            >
                <img class="h-4" src="/images/arrow-pagination.svg" alt="" />
            </button>
            <button
                class="px-2 py-1 flex items-center border rounded transition-all hover:border-orange-500"
            >
                <img
                    class="h-4 rotate-180"
                    src="/images/arrow-pagination.svg"
                    alt=""
                />
            </button>
        </div>
    </div>
</template>

<script>
export default {};
</script>
