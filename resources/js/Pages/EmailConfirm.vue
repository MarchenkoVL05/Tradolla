<template>
    <page-head><title>Email confirmation | Tradolla.com</title></page-head>
    <auth-layout>
        <form
            action="javascript: window.location.href='company-register'"
            class="mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-md md:shadow"
        >
            <h1 class="font-bold text-center text-2xl text-gray-800">
                Confirm your email
            </h1>
            <p class="mt-2 text-base sm:text-lg text-center text-gray-600">
                Enter the code sent to you via email
            </p>
            <div
                class="mt-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6"
            >
                Or
            </div>
            <Link
                class="block mt-3 text-base text-center underline text-gray-500"
                href="/phone-confirm"
            >
                Send the code to the phone number
            </Link>
            <div class="mt-5 flex items-center justify-center gap-4">
                <one-symbol-input @input="nextInputFocus($event)" autofocus />
                <one-symbol-input @input="nextInputFocus($event)" />
                <one-symbol-input @input="nextInputFocus($event)" />
                <one-symbol-input @input="nextInputFocus($event)" />
                <one-symbol-input @input="nextInputFocus($event)" />
                <one-symbol-input @input="nextInputFocus($event)" />
            </div>
            <button-orange class="w-full mt-4 px-4 py-3 font-medium">
                Confirm
            </button-orange>
            <p class="mt-4 text-base text-center text-gray-600">
                Confirmation code not received?
                <button
                    class="text-orange-600 decoration-2 hover:underline font-medium"
                >
                    Try again
                </button>
            </p>
        </form>
    </auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";
import OneSymbolInput from "../Components/Inputs/OneSymbolInput.vue";

export default {
    components: {
        PageHead,
        Link,
        AuthLayout,
        ButtonOrange,
        OneSymbolInput,
    },

    methods: {
        nextInputFocus(e) {
            if (e.target.nextElementSibling && e.target.value !== "") {
                e.target.nextElementSibling.focus();
            }
        },
    },
};
</script>
