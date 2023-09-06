<template>
    <form-box>
        <template #title>Pricing</template>
        <template #inputs>
            <div class="px-4 py-2 flex flex-col gap-1">
                <the-tooltip>
                    <template #title>Base Price:</template>
                    <template #hint>Product regular price</template>
                </the-tooltip>
                <div class="flex gap-2">
                    <base-input type="number"></base-input>
                    <select
                        class="p-2 border rounded text-sm text-gray-500 bg-white focus:outline-none focus:border-orange-600"
                        name="legal_form"
                    >
                        <option value="USD">USD</option>
                        <option value="RUB">RUB</option>
                        <option value="EU">EU</option>
                    </select>
                </div>
            </div>
            <div class="px-4 py-2 flex flex-col gap-1">
                <div class="text-gray-800">Discount in percentage:</div>
                <base-input type="number"></base-input>
            </div>
            <div class="px-4 py-2 flex flex-col gap-1">
                <the-tooltip>
                    <template #title>Final Price:</template>
                    <template #hint>Product final price</template>
                </the-tooltip>
                <base-input disabled></base-input>
            </div>
        </template>
    </form-box>
</template>

<script>
import FormBox from "../Forms/FormBox.vue";
import BaseInput from "../Inputs/BaseInput.vue";
import TheTooltip from "../TheTooltip.vue";
import vSelect from "vue-select";

export default {
    components: {
        FormBox,
        BaseInput,
        TheTooltip,
        vSelect,
    },

    data() {
        return {
            currencies: ["USD", "RUB", "EU"],
        };
    },
};
</script>
