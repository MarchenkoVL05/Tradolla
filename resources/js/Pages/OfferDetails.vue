<template>
    <page-head><title>Offer details | Tradolla.com</title></page-head>
    <base-layout>
        <div class="flex flex-col md:grid md:grid-cols-3 gap-3 text-gray-800">
            <procurement-details-info
                class="col-span-2"
            ></procurement-details-info>
            <div class="col-span-1 flex flex-col gap-3">
                <procurement-details-company></procurement-details-company>
                <div class="h-full rounded border p-4 bg-white">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.5620249215126!2d58.49017452510491!3d51.22714340599063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x417ffa30ce7e2269%3A0x679025c6b75b0fee!2z0YPQuy4g0JvQtdC90LjQvdGB0LrQvtCz0L4g0JrQvtC80YHQvtC80L7Qu9CwLCAxLCDQntGA0YHQuiwg0J7RgNC10L3QsdGD0YDQs9GB0LrQsNGPINC-0LHQuy4sIDQ2MjQyOA!5e0!3m2!1sru!2sru!4v1690259668591!5m2!1sru!2sru"
                        width="100%"
                        height="100%"
                        allowfullscreen="true"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
            <div
                class="col-span-3 w-full overflow-auto rounded p-4 mb-2 border bg-white"
            >
                <div class="flex items-center gap-2">
                    <span class="font-medium">purchase positions:</span>
                    <button @click="selectAll" class="text-orange-500">
                        select all
                    </button>
                </div>
                <procurement-details-table
                    :selected="selected"
                    class="mt-2 grid grid-cols-5 min-w-[1020px]"
                ></procurement-details-table>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProcurementDetailsInfo from "../Components/Procurement/ProcurementDetailsInfo.vue";
import ProcurementDetailsCompany from "../Components/Procurement/ProcurementDetailsCompany.vue";
import ProcurementDetailsTable from "../Components/Procurement/ProcurementDetailsTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        ProcurementDetailsInfo,
        ProcurementDetailsCompany,
        ProcurementDetailsTable,
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
