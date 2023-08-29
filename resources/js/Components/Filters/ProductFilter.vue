<template>
    <title-filter>Apply your filters &#8595;</title-filter>
    <base-filter>
        <form class="p-3 text-gray-800" action="">
            <div class="flex flex-col gap-3">
                <div class="flex justify-between items-end gap-4 flex-wrap">
                    <div class="flex items-end gap-3 sm:gap-6 flex-wrap">
                        <label class="w-full sm:w-auto flex flex-col gap-1">
                            <span class="font-medium">Product</span>
                            <loop-input></loop-input>
                        </label>
                        <label class="w-full sm:w-auto flex flex-col gap-1">
                            <span class="font-medium">Supplier</span>
                            <base-input></base-input>
                        </label>
                        <label class="w-full sm:w-auto flex flex-col gap-1">
                            <span class="font-medium">Country</span>
                            <base-input></base-input>
                        </label>
                        <div class="flex flex-col gap-1">
                            <span class="font-medium">Choose price</span>
                            <span class="flex gap-2">
                                <input
                                    class="w-24 sm:w-32 px-2 py-1 border rounded focus:outline-none focus:border-orange-600"
                                    type="number"
                                    placeholder="Min"
                                />
                                <input
                                    class="w-24 sm:w-32 px-2 py-1 border rounded focus:outline-none focus:border-orange-600"
                                    type="number"
                                    placeholder="Max"
                                />
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <button
                            class="transition-all text-orange-500 hover:text-slate-800"
                        >
                            Clear filters
                        </button>
                        <button-black>Search</button-black>
                    </div>
                </div>
            </div>
        </form>
    </base-filter>
</template>

<script>
import TitleFilter from "./TitleFilter.vue";
import BaseFilter from "./BaseFilter.vue";
import ButtonBlack from "../Buttons/ButtonBlack.vue";
import BaseInput from "../Inputs/BaseInput.vue";
import LoopInput from "../Inputs/LoopInput.vue";

export default {
    components: {
        TitleFilter,
        BaseFilter,
        ButtonBlack,
        BaseInput,
        LoopInput,
    },
};
</script>
