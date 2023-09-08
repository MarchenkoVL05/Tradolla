<template>
    <form
        action="javascript:window.location.href='dashboard.html'"
        class="relative mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-2xl md:shadow"
    >
        <div
            class="absolute top-0 left-0 w-full h-1 rounded-lg bg-orange-500"
        ></div>
        <h1 class="font-bold text-center text-2xl text-gray-800">
            Company details
        </h1>
        <p class="mt-2 max-w-xl text-base text-gray-600">
            Let's fill in the information about your company's social media. If
            any of the social networks are missing, leave the field blank.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-8">
            <div>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img
                            class="max-h-4"
                            src="/images/instagram.svg"
                            alt=""
                        />
                        <span>Instagram</span>
                    </span>
                    <base-input class="mt-2 py-2" />
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img
                            class="max-h-4"
                            src="/images/facebook.svg"
                            alt=""
                        />
                        <span>Facebook</span>
                    </span>
                    <base-input class="mt-2 py-2" />
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img
                            class="max-h-4"
                            src="/images/whatsApp.svg"
                            alt=""
                        />
                        <span>WhatsApp</span>
                    </span>
                    <base-input class="mt-2 py-2" />
                </label>
            </div>
            <div>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img class="max-h-4" src="/images/file.svg" alt="" />
                        <span>Logotype</span>
                    </span>
                    <input
                        class="mt-2 p-2 border rounded focus:outline-none focus:border-orange-600"
                        hidden
                        type="file"
                    />
                    <button-white class="mt-2 px-3 py-2 font-medium">
                        choose file
                    </button-white>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img
                            class="max-h-4"
                            src="/images/linkedin.svg"
                            alt=""
                        />
                        <span>LinkedIn</span>
                    </span>
                    <base-input class="mt-2 py-2" />
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    <span class="flex items-center gap-2">
                        <img class="max-h-4" src="/images/twitter.svg" alt="" />
                        <span>Twitter</span>
                    </span>
                    <base-input class="mt-2 py-2" />
                </label>
            </div>
        </div>
        <label class="flex flex-col mt-4 text-gray-600">
            Web-site
            <base-input class="mt-2 py-2" />
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            Brief description of the company
            <textarea
                class="mt-2 p-2 border rounded focus:outline-none focus:border-orange-600"
            ></textarea>
        </label>
        <label class="flex flex-col mt-4 text-gray-600">
            Full description of the company
            <textarea
                class="mt-2 p-2 border rounded focus:outline-none focus:border-orange-600"
            ></textarea>
        </label>
        <button-orange class="w-full px-4 py-3 mt-5 font-medium">
            Finish <img class="max-h-5" src="/images/finish.svg" alt="" />
        </button-orange>
    </form>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import ButtonWhite from "../Buttons/ButtonWhite.vue";

export default {
    components: {
        BaseInput,
        ButtonOrange,
        ButtonWhite,
    },
};
</script>
