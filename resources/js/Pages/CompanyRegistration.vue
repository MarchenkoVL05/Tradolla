<template>
    <page-head><title>Company registration | Tradolla.com</title></page-head>
    <auth-layout>
        <form-company-first
            v-if="formCounter == 1"
            @next-form="handleNextForm"
        />
        <form-company-second
            v-if="formCounter == 2"
            @next-form="handleNextForm"
        />
        <form-company-third
            v-if="formCounter == 3"
            @next-form="handleNextForm"
        />
        <form-company-fourth
            v-if="formCounter == 4"
            @next-form="handleNextForm"
        />
        <form-company-fifth v-if="formCounter == 5" />
    </auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";
import FormCompanyFirst from "../Components/Forms/FormCompanyFirst.vue";
import FormCompanySecond from "../Components/Forms/FormCompanySecond.vue";
import FormCompanyThird from "../Components/Forms/FormCompanyThird.vue";
import FormCompanyFourth from "../Components/Forms/FormCompanyFourth.vue";
import FormCompanyFifth from "../Components/Forms/FormCompanyFifth.vue";

export default {
    components: {
        PageHead,
        AuthLayout,
        FormCompanyFirst,
        FormCompanySecond,
        FormCompanyThird,
        FormCompanyFourth,
        FormCompanyFifth,
    },

    data() {
        return {
            formCounter: 1,
        };
    },

    methods: {
        handleNextForm() {
            if (this.formCounter < 5) {
                this.formCounter += 1;
            }
        },
    },
};
</script>
