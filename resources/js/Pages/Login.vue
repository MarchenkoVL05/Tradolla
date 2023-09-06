<template>
    <page-head><title>Login | Tradolla.com</title></page-head>
    <auth-layout>
        <form
            class="mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-sm md:shadow"
            action="javascript:window.location.href='/'"
        >
            <h1 class="font-bold text-center text-2xl text-gray-800">
                Sign In
            </h1>
            <p class="mt-2 text-base text-center text-gray-600">
                Don't have an account yet?
                <a
                    class="text-orange-600 decoration-2 hover:underline font-medium"
                    href="./registration.html"
                >
                    Sign up here
                </a>
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
            <label class="flex flex-col mt-4 text-gray-600">
                Email address
                <input
                    class="mt-2 p-2 border rounded focus:outline-none focus:border-orange-600"
                    type="text"
                />
            </label>
            <label class="flex flex-col mt-4 text-gray-600">
                <span class="flex justify-between">
                    Password
                    <a
                        class="text-orange-600 decoration-2 hover:underline font-medium"
                        href="./forgot-password.html"
                        >Forgot password?</a
                    >
                </span>
                <input
                    class="mt-2 p-2 border rounded focus:outline-none focus:border-orange-600"
                    type="text"
                />
            </label>
            <label class="flex items-center gap-2 mt-4 text-gray-600">
                <input class="w-4 h-4" type="checkbox" />
                Remember me
            </label>
            <button
                class="py-3 px-4 flex justify-center items-center transition-all rounded-md bg-orange-500 text-white font-semibold mt-4 w-full hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
                type="submit"
            >
                Sign in
            </button>
        </form>
    </auth-layout>
</template>

<script>
import { Head as PageHead } from "@inertiajs/vue3";
import AuthLayout from "../Layouts/AuthLayout.vue";

export default {
    components: {
        PageHead,
        AuthLayout,
    },
};
</script>
