<template>
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
                <div class="px-4 grid grid-cols-5 min-w-[1020px]">
                    <!-- table head -->
                    <div
                        class="flex justify-between items-center gap-4 p-2 font-medium border-t border-b border-r border-l shadow border-gray-200"
                    >
                        Product or Service
                        <button
                            class="flex items-start text-[12px] text-gray-800 hover:text-orange-500"
                        >
                            ▼
                        </button>
                    </div>
                    <div
                        class="p-2 font-medium border-t border-b border-r shadow border-gray-200"
                    >
                        Shipping Address
                    </div>
                    <div
                        class="p-2 font-medium border-t border-b border-r shadow border-gray-200"
                    >
                        Quantity
                    </div>
                    <div
                        class="p-2 font-medium border-t border-b border-r shadow border-gray-200"
                    >
                        Price per Unit
                    </div>
                    <div
                        class="p-2 font-medium border-t border-b border-r shadow border-gray-200"
                    >
                        Total Cost
                    </div>
                    <!-- 1 -->
                    <div class="p-2 border border-gray-100">
                        Architectural Planning
                    </div>
                    <div class="p-2 border border-gray-100">New York, USA</div>
                    <div class="p-2 border border-gray-100">3 pcs.</div>
                    <div class="p-2 border border-gray-100">$ 10,000</div>
                    <div class="p-2 border border-gray-100">$ 30,000</div>
                    <!-- 2 -->
                    <div class="p-2 border border-gray-100 bg-gray-100">
                        Interior Renovation
                    </div>
                    <div class="p-2 border border-gray-100 bg-gray-100">
                        London, United Kingdom
                    </div>
                    <div class="p-2 border border-gray-100 bg-gray-100">
                        1 pcs.
                    </div>
                    <div class="p-2 border border-gray-100 bg-gray-100">
                        $ 20,000
                    </div>
                    <div class="p-2 border border-gray-100 bg-gray-100">
                        $ 20,000
                    </div>
                    <!-- 3 -->
                    <div class="p-2 border border-gray-100">
                        Electrical and Wiring
                    </div>
                    <div class="p-2 border border-gray-100">Tokyo, Japan</div>
                    <div class="p-2 border border-gray-100">10 pcs.</div>
                    <div class="p-2 border border-gray-100">$ 8,000</div>
                    <div class="p-2 border border-gray-100">$ 80,000</div>
                </div>
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
import BaseLayout from "../Layouts/BaseLayout.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";

export default {
    components: {
        BaseLayout,
        FormBox,
        ButtonOrange,
    },
};
</script>
