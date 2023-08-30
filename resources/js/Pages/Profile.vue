<template>
    <page-head>
        <title>Profile | Tradolla.com</title>
    </page-head>
    <base-layout>
        <div class="bg-white p-4 rounded border">
            <tabs>
                <tab name="User account">
                    <div class="mt-4 grid grid-cols-4 gap-3">
                        <div
                            class="col-span-4 md:col-span-2 xl:col-span-1 flex flex-col gap-3"
                        >
                            <profile-avatar></profile-avatar>
                            <profile-company></profile-company>
                            <profile-about-me></profile-about-me>
                        </div>
                        <div
                            class="col-span-4 md:col-span-2 xl:col-span-3 flex flex-col gap-3"
                        >
                            <form-box>
                                <template #title>Basic information</template>
                                <template #inputs>
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 px-4 py-2 gap-3 sm:gap-4"
                                    >
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                First Name
                                            </div>
                                            <base-input
                                                value="Emilia"
                                            ></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Last Name
                                            </div>
                                            <base-input
                                                value="Clarke"
                                            ></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Patronymic (if any)
                                            </div>
                                            <base-input></base-input>
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 px-4 py-2 gap-3 sm:gap-4"
                                    >
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Business role
                                            </div>
                                            <base-input
                                                value="Product manager"
                                            ></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Country
                                            </div>
                                            <base-input value="UK"></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                City
                                            </div>
                                            <base-input
                                                value="London"
                                            ></base-input>
                                        </div>
                                    </div>
                                </template>
                            </form-box>
                            <form-box>
                                <template #title>Contacts</template>
                                <template #inputs>
                                    <div
                                        class="grid grid-cols-1 xl:grid-cols-2 px-4 py-2 gap-4"
                                    >
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Email
                                            </div>
                                            <base-input
                                                value="emiliaclarke228@gmail.com"
                                            ></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Phone
                                            </div>
                                            <base-input
                                                value="8-800-555-35-35"
                                            ></base-input>
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 xl:grid-cols-2 px-4 py-2 gap-4"
                                    >
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                New password
                                            </div>
                                            <base-input
                                                type="password"
                                            ></base-input>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="font-medium text-gray-800"
                                            >
                                                Confirm new password
                                            </div>
                                            <base-input
                                                type="password"
                                            ></base-input>
                                        </div>
                                    </div>
                                </template>
                            </form-box>
                            <div class="flex flex-col overflow-auto bg-white">
                                <span class="py-2 font-semibold"
                                    >About Me:</span
                                >
                                <trix-editor></trix-editor>
                            </div>
                            <div class="flex justify-end">
                                <div class="flex items-center gap-1">
                                    <button
                                        class="px-4 py-1 sm:text-lg transition-all hover:text-orange-500"
                                    >
                                        Reset
                                    </button>
                                    <button-orange class="px-4 py-2">
                                        Save
                                    </button-orange>
                                </div>
                            </div>
                        </div>
                    </div>
                </tab>
                <tab name="Company profile"></tab>
            </tabs>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Tabs, Tab } from "vue3-tabs-component";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProfileAvatar from "../Components/Profile/ProfileAvatar.vue";
import ProfileCompany from "../Components/Profile/ProfileCompany.vue";
import ProfileAboutMe from "../Components/Profile/ProfileAboutMe.vue";
import FormBox from "../Components/Forms/FormBox.vue";
import BaseInput from "../Components/Inputs/BaseInput.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";
import ButtonWhite from "../Components/Buttons/ButtonWhite.vue";

export default {
    components: {
        PageHead,
        Tabs,
        Tab,
        BaseLayout,
        ProfileAvatar,
        ProfileCompany,
        ProfileAboutMe,
        FormBox,
        BaseInput,
        ButtonOrange,
        ButtonWhite,
    },
};
</script>
