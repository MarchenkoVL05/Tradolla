<template>
    <div class="p-4 border rounded shadow bg-white">
        <h1 class="text-lg sm:text-xl font-bold">Details</h1>
        <div class="text-sm sm:text-base mt-1 text-gray-500">
            Enter information about the posting you want to publish. You can
            come back to this page to make changes at any time.
        </div>
        <div class="mt-4 flex flex-col gap-1">
            <div class="font-medium text-gray-800">Posting Title</div>
            <base-input autofocus></base-input>
        </div>
        <div class="mt-4 flex flex-col gap-1">
            <div class="font-medium text-gray-800">Description</div>
            <trix-editor></trix-editor>
        </div>
        <div class="mt-4 flex gap-2 sm:gap-4 flex-wrap">
            <div class="flex flex-col gap-1">
                <div class="font-medium text-gray-800">Deadline</div>
                <base-input type="date"></base-input>
            </div>
            <div class="flex flex-col gap-1">
                <div class="font-medium text-gray-800">
                    <the-tooltip>
                        <template #title>
                            <span class="text-gray-800">Budget</span>
                        </template>
                        <template #hint>
                            The budget will be automatically recalculated as
                            items or services are added
                        </template>
                    </the-tooltip>
                </div>
                <input
                    class="px-2 py-1 border rounded focus:outline-none focus:border-orange-600"
                    disabled
                    type="number"
                />
            </div>
        </div>
    </div>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import TheTooltip from "../TheTooltip.vue";

export default {
    components: {
        BaseInput,
        TheTooltip,
    },
};
</script>
