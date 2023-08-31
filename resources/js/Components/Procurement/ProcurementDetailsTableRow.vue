<template>
    <div
        class="col-span-5 grid grid-cols-5"
        :class="{ 'bg-gray-100': index % 2 == 0 }"
    >
        <label class="flex items-center gap-2 p-2 border border-gray-100"
            ><input
                class="w-4 h-4 flex-shrink-0"
                type="checkbox"
                :checked="selected"
            />
            Architectural Planning</label
        >
        <div class="p-2 border border-gray-100">New York, USA</div>
        <div class="p-2 border border-gray-100">3 pcs.</div>
        <div class="p-2 border border-gray-100">$ 10,000</div>
        <div class="p-2 border border-gray-100">$ 30,000</div>
    </div>
</template>

<script>
export default {
    props: ["index", "selected"],
};
</script>
