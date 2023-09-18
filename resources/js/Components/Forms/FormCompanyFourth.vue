<template>
    <form
        class="relative mx-auto p-6 max-w-full rounded-lg bg-white md:h-auto md:max-w-lg md:shadow"
    >
        <div
            class="absolute top-0 left-0 w-5/6 h-1 rounded-lg bg-orange-500"
        ></div>
        <h1 class="font-bold text-center text-2xl text-gray-800">
            Company registration
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-8">
            <div>
                <label class="flex flex-col mt-4 text-gray-600">
                    Legal form
                    <v-select class="mt-2" :options="legalForm"></v-select>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Bank name
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Account number
                    <base-input class="mt-2 py-2"></base-input>
                </label>
            </div>
            <div>
                <label class="flex flex-col mt-4 text-gray-600">
                    Type of company
                    <v-select class="mt-2" :options="typeOfCompany"></v-select>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    BIC code and/or SWIFT/IBAN
                    <base-input class="mt-2 py-2"></base-input>
                </label>
                <label class="flex flex-col mt-4 text-gray-600">
                    Scope of activity
                    <v-select
                        class="mt-2"
                        :options="scopeOfActivity"
                    ></v-select>
                </label>
            </div>
        </div>
        <button-orange
            @click="nextForm($event)"
            class="w-full mt-5 px-4 py-3 font-medium"
        >
            Next
            <img class="max-h-5" src="/images/arrow-btn-right.svg" alt="" />
        </button-orange>
    </form>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";
import TheTooltip from "../TheTooltip.vue";
import vSelect from "vue-select";

export default {
    components: {
        BaseInput,
        ButtonOrange,
        TheTooltip,
        vSelect,
    },

    data() {
        return {
            legalForm: ["corporation", "sole proprietor", "partnership"],
            typeOfCompany: [
                "manufacturer",
                "service provider",
                "broker",
                "government agency",
            ],
            scopeOfActivity: [
                "manufacturing",
                "retail",
                "finance",
                "healthcare",
                "technology",
            ],
        };
    },

    methods: {
        nextForm(e) {
            e.preventDefault();
            this.$emit("next-form");
        },
    },
};
</script>
