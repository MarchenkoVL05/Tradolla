<template>
    <page-head><title>Registration | Tradolla.com</title></page-head>
    <auth-layout>
        <form
            class="mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-2xl md:shadow"
            action="javascript:window.location.href='/email-confirm'"
        >
            <h1 class="font-bold text-center text-2xl text-gray-800">
                Sign Up
            </h1>
            <p class="mt-2 text-base text-center text-gray-600">
                Already have an account?
                <Link
                    class="text-orange-600 decoration-2 hover:underline font-medium"
                    href="/login"
                >
                    Sign in here
                </Link>
            </p>
            <button
                type="button"
                class="w-full py-3 px-4 mt-4 inline-flex justify-center items-center gap-2 rounded border font-medium bg-white text-gray-800 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
            >
                <img class="w-4 h-auto" src="/images/google-icon.svg" alt="" />
                Sign in with Google
            </button>
            <div
                class="mt-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6"
            >
                Or
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
                <label class="flex flex-col mt-4 text-gray-600">
                    Email address
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Phone
                    <base-input class="mt-2 py-2" type="tel"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    <the-tooltip>
                        <template #title
                            ><span>Your business role</span></template
                        >
                        <template #hint>
                            Manager, director, employee etc.
                        </template>
                    </the-tooltip>
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Name
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Surname
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Patronymic (if any)
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Country
                    <base-input class="mt-2 py-2" type="tel"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    City
                    <base-input class="mt-2 py-2" type="tel"></base-input>
                </label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <label class="flex flex-col mt-4 text-gray-600">
                    Password
                    <base-input class="mt-2 py-2" type="password"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Confirm Password
                    <base-input class="mt-2 py-2" type="password"></base-input>
                </label>
            </div>
            <div class="my-6 mx-auto w-1/2 h-[1px] bg-gray-200"></div>
            <div class="grid gap-4 md:grid-cols-2 md:gap-9 mt-4">
                <div class="flex items-center flex-wrap gap-2">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input class="w-4 h-4" type="checkbox" />
                        I accept the
                    </label>
                    <Link
                        class="text-orange-600 decoration-2 hover:underline font-medium"
                        href="#"
                        >Terms and Conditions
                    </Link>
                </div>
                <button-orange class="px-4 py-3 font-medium" type="submit">
                    Sign up
                </button-orange>
            </div>
        </form>
    </auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";
import TheTooltip from "../Components/TheTooltip.vue";
import BaseInput from "../Components/Inputs/BaseInput.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";

export default {
    components: {
        PageHead,
        Link,
        AuthLayout,
        TheTooltip,
        BaseInput,
        ButtonOrange,
    },
};
</script>
