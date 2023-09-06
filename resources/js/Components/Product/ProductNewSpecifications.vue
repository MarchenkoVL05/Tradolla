<template>
    <form-box>
        <template #title>Specifications</template>
        <template #inputs>
            <div class="text-sm sm:text-base px-4 py-2 flex flex-col gap-4">
                <div class="py-2 grid grid-cols-6 gap-4 justify-between">
                    <div class="col-span-2">Processor</div>
                    <div class="col-span-3">2.3GHz quad-core Intel Core i5</div>
                    <button class="col-span-1 justify-self-end">
                        <img
                            class="h-5 sm:h-6"
                            src="/images/trash-icon.svg"
                            alt=""
                        />
                    </button>
                </div>
                <div class="py-2 grid grid-cols-6 gap-4 justify-between">
                    <div class="col-span-2">Memory</div>
                    <div class="col-span-3">
                        8GB of 2133MHz LPDDR3 onboard memory
                    </div>
                    <button class="col-span-1 justify-self-end">
                        <img
                            class="h-5 sm:h-6"
                            src="/images/trash-icon.svg"
                            alt=""
                        />
                    </button>
                </div>
                <div class="py-2 grid grid-cols-6 gap-4 justify-between">
                    <div class="col-span-2">Brand name</div>
                    <div class="col-span-3">Apple</div>
                    <button class="col-span-1 justify-self-end">
                        <img
                            class="h-5 sm:h-6"
                            src="/images/trash-icon.svg"
                            alt=""
                        />
                    </button>
                </div>
                <div class="py-2 grid grid-cols-6 gap-4 justify-between">
                    <base-input
                        class="col-span-2"
                        placeholder="label"
                    ></base-input>
                    <base-input
                        class="col-span-3"
                        placeholder="property"
                    ></base-input>
                    <button
                        class="col-span-1 justify-self-end font-medium hover:underline"
                    >
                        Add
                    </button>
                </div>
            </div>
        </template>
    </form-box>
</template>

<script>
import FormBox from "../Forms/FormBox.vue";
import BaseInput from "../Inputs/BaseInput.vue";

export default {
    components: {
        FormBox,
        BaseInput,
    },
};
</script>
