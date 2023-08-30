<template>
    <div class="mt-4 grid grid-cols-4 gap-3">
        <form-box class="col-span-4 sm:col-span-2">
            <template #title>Basic information</template>
            <template #inputs>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">Name</div>
                    <base-input value="Chunghwa Telecom Co., Ltd."></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">
                        Short description
                    </div>
                    <base-input
                        value="is the largest integrated telecom service provider in Taiwan, and the incumbent local exchange carrier of PSTN, Mobile, and broadband services in the country."
                    ></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">Who we are?</div>
                    <trix-editor></trix-editor>
                </div>
                <div class="px-4 py-2 flex flex-wrap gap-2 sm:gap-4">
                    <div class="font-medium text-gray-800">Logotype:</div>
                    <img
                        class="h-12 sm:h-16"
                        src="/images/company-logo.svg"
                        alt=""
                    />
                </div>
                <div class="p-4">
                    <div
                        class="h-14 sm:h-16 flex items-center gap-2 justify-center flex-wrap mx-auto border rounded border-gray-400 border-dashed text-gray-500"
                    >
                        Drag you logotype or
                        <span class="cursor-pointer text-orange-500">
                            browse</span
                        >
                    </div>
                </div>
            </template>
        </form-box>
        <form-box class="col-span-4 sm:col-span-2">
            <template #title>Contacts and social</template>
            <template #inputs>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">Email</div>
                    <base-input value="chtir@cht.com.tw"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">Phone</div>
                    <base-input value="+8 800 555 35 35"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-2">
                    <div
                        class="flex items-center gap-1 font-medium text-gray-800"
                    >
                        <img class="h-6" src="/images/facebook.svg" alt="" />
                        <span>Facebook</span>
                    </div>
                    <base-input value="facebook.com/chngwa"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-2">
                    <div
                        class="flex items-center gap-1 font-medium text-gray-800"
                    >
                        <img class="h-6" src="/images/instagram.svg" alt="" />
                        <span>Instagram</span>
                    </div>
                    <base-input value="instagram.com/chngwa"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-2">
                    <div
                        class="flex items-center gap-1 font-medium text-gray-800"
                    >
                        <img class="h-6" src="/images/linkedin.svg" alt="" />
                        <span>LinkedIn</span>
                    </div>
                    <base-input value="Linkedin.com/cto"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-2">
                    <div
                        class="flex items-center gap-1 font-medium text-gray-800"
                    >
                        <img class="h-6" src="/images/twitter.svg" alt="" />
                        <span>Twitter</span>
                    </div>
                    <base-input value="Twitter.com/cto"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-2">
                    <div
                        class="flex items-center gap-1 font-medium text-gray-800"
                    >
                        <img class="h-6" src="/images/whatsapp.svg" alt="" />
                        <span>WhatsApp</span>
                    </div>
                    <base-input value="wa.com/chngwa"></base-input>
                </div>
                <div class="px-4 py-2 flex flex-col gap-1">
                    <div class="font-medium text-gray-800">Web-site</div>
                    <base-input value="www.cht.com.tw"></base-input>
                </div>
                <div class="p-4 flex justify-end">
                    <button-orange class="px-4 py-1">Save</button-orange>
                </div>
            </template>
        </form-box>
        <form-box class="col-span-4">
            <template #title>Requisites</template>
            <template #inputs>
                <div
                    class="p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4"
                >
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Headquarters
                        </div>
                        <base-input value="Taiwan, Taipei"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Company Registration Number
                        </div>
                        <base-input value="96979976"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Taxpayer Identification Number
                        </div>
                        <base-input value="01123456323"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">DUNS-number</div>
                        <base-input value="31-41-634"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Year of foundation
                        </div>
                        <base-input value="1996"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Full-time staff
                        </div>
                        <base-input value="1500"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Annual income (USD)
                        </div>
                        <base-input value="$40 000 000"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">Legal form</div>
                        <base-input value="corporation"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Type of company
                        </div>
                        <base-input value="manufacturer"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Scope of activity
                        </div>
                        <base-input value="manufacturing"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">Bank name</div>
                        <base-input value="Taibai Bank"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            BIC code and/or SWIFT/IBAN
                        </div>
                        <base-input value="090293023012"></base-input>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="font-medium text-gray-800">
                            Account number
                        </div>
                        <base-input value="32032-323-235-23"></base-input>
                    </div>
                </div>
            </template>
        </form-box>
        <div
            class="p-4 col-span-4 border rounded overflow-auto bg-white text-gray-800"
        >
            <h4 class="font-medium text-center text-slate-800">
                Employees (11)
            </h4>
            <div
                class="mt-4 mx-auto max-w-screen-xl grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 xl:grid-cols-7 gap-3 sm:gap-5"
            >
                <employee-card v-for="index in 11" :key="index"></employee-card>
            </div>
            <button class="block mt-4 mx-auto text-gray-500">view all ↓</button>
        </div>
    </div>
</template>

<script>
import FormBox from "../Forms/FormBox.vue";
import BaseInput from "../Inputs/BaseInput.vue";
import EmployeeCard from "../EmployeeCard.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";

export default {
    components: {
        FormBox,
        BaseInput,
        EmployeeCard,
        ButtonOrange,
    },
};
</script>
