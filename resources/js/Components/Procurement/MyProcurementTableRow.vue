<template>
    <div
        class="grid grid-cols-7 col-span-7"
        :class="{ 'bg-slate-50': index % 2 == 0 }"
    >
        <div class="col-span-3 p-4">
            <request-favorite></request-favorite>
            <a
                class="inline-block font-medium hover:underline"
                href="./offer-details.html"
                >Construction Services for Office Expansion Project
            </a>
        </div>
        <span class="p-4 flex items-center">12 october 2023</span>
        <span class="p-4 flex items-center">31 may 2023</span>
        <span
            class="p-4 xl:text-lg font-thin flex items-center text-green-500"
            :class="{ 'text-red-500': index == 5 || index == 7 }"
            >{{ index == 5 || index == 7 ? "Opened" : "Closed" }}</span
        >
        <div class="p-4 flex items-center gap-6">
            <action-btns></action-btns>
        </div>
    </div>
</template>

<script>
import RequestFavorite from "../RequestFavorite.vue";
import ActionBtns from "../ActionBtns.vue";

export default {
    props: ["index"],

    components: {
        RequestFavorite,
        ActionBtns,
    },
};
</script>
