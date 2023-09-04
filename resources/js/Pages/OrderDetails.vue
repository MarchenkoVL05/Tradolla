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
import { Link } from "@inertiajs/vue3";
import BaseLayout from "../Layouts/BaseLayout.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import ProcurementDetailsTable from "../Components/Procurement/ProcurementDetailsTable.vue";
import CompanyInfoTable from "../Components/Company/CompanyInfoTable.vue";

export default {
    components: {
        PageHead,
        Link,
        BaseLayout,
        FormBox,
        ProcurementDetailsTable,
        CompanyInfoTable,
    },
};
</script>
