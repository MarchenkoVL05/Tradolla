<template>
    <page-head>
        <title>Profile | Tradolla.com</title>
    </page-head>
    <base-layout>
        <div class="bg-white p-4 rounded border">
            <tabs>
                <tab name="User account">
                    <profile-user-about-tab></profile-user-about-tab>
                </tab>
                <tab name="Company profile">
                    <profile-company-tab></profile-company-tab>
                </tab>
            </tabs>
        </div>
    </base-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Tabs, Tab } from "vue3-tabs-component";
import BaseLayout from "../Layouts/BaseLayout.vue";
import ProfileUserAboutTab from "../Components/Profile/ProfileUserAboutTab.vue";
import ProfileCompanyTab from "../Components/Profile/ProfileCompanyTab.vue";

export default {
    components: {
        PageHead,
        Tabs,
        Tab,
        BaseLayout,
        ProfileUserAboutTab,
        ProfileCompanyTab,
    },
};
</script>
