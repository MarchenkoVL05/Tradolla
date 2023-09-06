<template>
    <form-box :overflow="false">
        <template #title>Type</template>
        <template #inputs>
            <div class="px-4 py-2 flex flex-col gap-1">
                <div class="text-gray-800">Select category:</div>
                <v-select :options="categories"></v-select>
            </div>
            <div class="px-4 py-2 flex flex-col gap-1">
                <div class="text-gray-800">Select sub-category:</div>
                <v-select :options="categories"></v-select>
            </div>
        </template>
    </form-box>
</template>

<script>
import FormBox from "../Forms/FormBox.vue";
import vSelect from "vue-select";

export default {
    props: {
        overflow: {
            type: Boolean,
            default: true,
        },
    },

    components: {
        FormBox,
        vSelect,
    },

    data() {
        return {
            categories: [
                "electonics",
                "home and kitchen",
                "fashion",
                "books",
                "health",
            ],
        };
    },
};
</script>
