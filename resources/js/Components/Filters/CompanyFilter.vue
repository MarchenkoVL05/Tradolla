<template>
    <title-filter>Find your supplier &#8595;</title-filter>
    <base-filter class="p-3">
        <form
            class="flex items-end justify-between gap-4 text-gray-500"
            action=""
        >
            <div class="flex items-end gap-4 w-full">
                <label class="flex flex-col gap-1 w-full">
                    Supplier name
                    <span class="relative flex items-center gap-3">
                        <img
                            class="max-h-4 absolute left-2"
                            src="/images/search-icon.svg"
                            alt=""
                        />
                        <input
                            class="max-w-full w-full pl-8 py-1 pr-2 border rounded focus:outline-none focus:border-orange-600"
                            type="text"
                        />
                    </span>
                </label>
            </div>
            <button
                class="py-2 px-6 flex justify-center items-center transition-all rounded bg-slate-900 text-white font-semibold hover:bg-slate-700 focus:outline-none focus:ring-2 focus:bg-slate-900 focus:ring-offset-2"
                type="submit"
            >
                Search
            </button>
        </form>
    </base-filter>
</template>

<script>
import TitleFilter from "./TitleFilter.vue";
import BaseFilter from "./BaseFilter.vue";

export default {
    components: {
        TitleFilter,
        BaseFilter,
    },
};
</script>
