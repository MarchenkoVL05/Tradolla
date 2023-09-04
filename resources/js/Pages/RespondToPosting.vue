<template>
    <page-head><title>Respond | Tradolla.com</title></page-head>
    <base-layout>
        <div class="grid grid-cols-2 gap-3">
            <form-box class="col-span-2 sm:col-span-1">
                <template #title>Supplier:</template>
                <template #inputs>
                    <div class="px-4 py-2 flex flex-col gap-1">
                        <div>
                            Company:
                            <span class="font-medium">Aksioma LTD.</span>
                        </div>
                        <div>
                            DUNS-number:
                            <span class="font-medium">5-048-3782</span>
                        </div>
                    </div>
                </template>
            </form-box>
            <form-box class="col-span-2 sm:col-span-1">
                <template #title>Request</template>
                <template #inputs>
                    <div class="px-4 py-2 text-sm">
                        Requests are typically used to assess the capabilities,
                        offerings, and pricing of potential suppliers, aiding
                        the organization in making informed decisions before
                        proceeding to a formal Request (RFP) or bidding process.
                    </div>
                </template>
            </form-box>
            <form-box class="col-span-2">
                <template #title>Buyer:</template>
                <template #inputs>
                    <div class="px-4 py-2 flex flex-col gap-3">
                        <div>
                            Company:
                            <Link
                                class="text-blue-500 hover:underline"
                                href="/companies/1"
                                >Chunghwa Telecom Ltd. (view profile)</Link
                            >
                        </div>
                        <company-info-table></company-info-table>
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
            <div class="col-span-2 mb-2 border rounded shadow bg-white">
                <div class="px-4 py-2 font-medium rounded bg-gray-50">
                    Details:
                </div>
                <div class="px-4 py-2">
                    <p class="inline-block my-4 text-sm sm:text-base">
                        Elaborate on your eligibility for this opportunity.
                        Here's your moment to set yourself apart from the
                        competition and highlight your credentials. Your
                        response will help the buyer decide whether you should
                        be considered as a potential candidate or chosen for the
                        business endeavor.
                    </p>
                    <form action="">
                        <trix-editor></trix-editor>
                        <div class="mt-4 flex justify-end">
                            <button-orange class="px-4 py-2"
                                >Submit</button-orange
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";
import ProcurementDetailsTable from "../Components/Procurement/ProcurementDetailsTable.vue";
import CompanyInfoTable from "../Components/Company/CompanyInfoTable.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        FormBox,
        ButtonOrange,
        ProcurementDetailsTable,
        CompanyInfoTable,
    },
};
</script>
