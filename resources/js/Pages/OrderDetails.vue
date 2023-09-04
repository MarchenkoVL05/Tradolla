<template>
    <page-head><title>Order #1 | Tradolla.com</title></page-head>
    <base-layout>
        <div class="max-w-[1627px] mx-auto grid grid-cols-2 gap-3">
            <form-box class="col-span-2">
                <template #title>Supplier:</template>
                <template #inputs
                    ><div class="px-4 py-2 flex flex-col gap-3">
                        <div>
                            Company:
                            <a
                                class="text-blue-500 hover:underline"
                                href="./company.html"
                                >Chunghwa Telecom Ltd. (view profile)</a
                            >
                        </div>
                        <div class="flex flex-col text-sm sm:text-base">
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Headquarters</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >Taiwan, Taipei</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Company name</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >Chunghwa Telecom Co., Ltd.</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Company Registration Number</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >96979976</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Taxpayer Identification Number</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >01123456323</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >DUNS-number</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >31-41-634</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Year of foundation</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >1996</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Full-time staff</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >1500</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Annual income (USD)</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >$40 000 000</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Legal form</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >corporation</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Type of company</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >manufacturer</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Scope of activity</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >manufacturing</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Bank name</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >Taibai Bank</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >BIC code and/or SWIFT/IBAN</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >090293023012</span
                                >
                            </div>
                            <div class="grid grid-cols-2">
                                <span
                                    class="p-1 border-b bg-slate-100 text-gray-500"
                                    >Account number</span
                                >
                                <span
                                    class="p-1 font-medium border-b border-gray-100"
                                    >32032-323-235-23</span
                                >
                            </div>
                        </div>
                    </div>
                </template>
            </form-box>
            <div
                class="col-span-2 border rounded shadow w-full overflow-auto bg-white"
            >
                <div class="px-4 py-2 font-medium rounded">
                    Chosen positions:
                </div>
                <procurement-details-table
                    :selected="'hidden'"
                    class="px-2 pb-2 grid grid-cols-5 min-w-[1020px]"
                ></procurement-details-table>
            </div>
            <form-box class="col-span-2">
                <template #title>Details:</template>
                <template #inputs>
                    <p class="px-4 inline-block my-4 text-sm sm:text-base">
                        Elaborate on your eligibility for this opportunity.
                        Here's your moment to set yourself apart from the
                        competition and highlight your credentials. Your
                        response will help the buyer decide whether you should
                        be considered as a potential candidate or chosen for the
                        business endeavor.
                    </p>
                </template>
            </form-box>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import ProcurementDetailsTable from "../Components/Procurement/ProcurementDetailsTable.vue";

export default {
    components: {
        PageHead,
        BaseLayout,
        FormBox,
        ProcurementDetailsTable,
    },
};
</script>
