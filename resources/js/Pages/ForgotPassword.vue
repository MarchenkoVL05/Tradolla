<template>
    <page-head><title>Forgot Password | Tradolla.com</title></page-head>
    <auth-layout>
        <form
            class="mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-sm md:shadow"
        >
            <h1 class="font-bold text-center text-2xl text-gray-800">
                Forgot password?
            </h1>
            <p class="mt-2 text-base text-center text-gray-600">
                Remember your password?
                <Link
                    class="text-orange-600 decoration-2 hover:underline font-medium"
                    href="/login"
                >
                    Sign in here
                </Link>
            </p>
            <label class="flex flex-col mt-4 text-gray-600">
                Email address
                <base-input class="mt-2 py-2"></base-input>
            </label>
            <button-orange
                class="w-full mt-4 px-4 py-3 font-medium"
                type="submit"
            >
                Reset password
            </button-orange>
        </form>
    </auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";
import BaseInput from "../Components/Inputs/BaseInput.vue";
import ButtonOrange from "../Components/Buttons/ButtonOrange.vue";

export default {
    components: {
        PageHead,
        Link,
        AuthLayout,
        BaseInput,
        ButtonOrange,
    },
};
</script>
