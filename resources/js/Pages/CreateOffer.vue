<template>
    <page-head><title>New offer | Tradolla.com</title></page-head>
    <base-layout>
        <div class="mt-4 pb-2 grid grid-cols-1 xl:grid-cols-4 gap-3">
            <procurement-new-details
                class="col-span-4 xl:col-span-2"
            ></procurement-new-details>
            <div class="col-span-4 xl:col-span-2">
                <procurement-new-purchase-position></procurement-new-purchase-position>
            </div>
            <div class="col-span-4">
                <div
                    class="w-full overflow-auto rounded p-4 border-x border-t bg-white"
                >
                    <div class="flex items-center gap-2">
                        <span class="font-medium">purchase positions:</span>
                        <button @click="selectAll" class="text-orange-500">
                            delete selected
                        </button>
                    </div>
                    <procurement-details-table
                        :selected="selected"
                        class="mt-2 grid grid-cols-5 min-w-[1020px]"
                    ></procurement-details-table>
                </div>
                <div
                    class="px-4 py-2 flex rounded-b border-x border-b justify-end bg-white"
                >
                    <button-orange class="py-2 px-6" type="submit">
                        Save post
                    </button-orange>
                </div>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProcurementNewDetails from "../Components/Procurement/ProcurementNewDetails.vue";
import ProcurementNewPurchasePosition from "../Components/Procurement/ProcurementNewPurchasePosition.vue";
import ProcurementDetailsTable from "../Components/Procurement/ProcurementDetailsTable.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";
import ButtonBlack from "../Components/Buttons/ButtonBlack.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        ProcurementNewDetails,
        ProcurementNewPurchasePosition,
        ProcurementDetailsTable,
        ButtonOrange,
        ButtonBlack,
    },

    data() {
        return {
            selected: false,
        };
    },

    methods: {
        selectAll() {
            this.selected = !this.selected;
        },
    },
};
</script>
