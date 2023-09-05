<template>
    <form class="mt-4 flex flex-col gap-2 sm:gap-4 text-gray-600" action="">
        <label class="flex flex-col gap-2">
            Name:
            <base-input class="py-2"></base-input>
        </label>
        <label class="flex flex-col gap-2">
            Email:
            <base-input class="py-2"></base-input>
        </label>
        <label class="flex flex-col gap-2">
            Review:
            <textarea
                class="p-2 border rounded focus:outline-none focus:border-orange-600"
            ></textarea>
        </label>
        <button-orange class="py-3 px-4 max-w-xs font-semibold" type="submit"
            >Submit</button-orange
        >
    </form>
</template>

<script>
import BaseInput from "../Inputs/BaseInput.vue";
import ButtonOrange from "../Buttons/ButtonOrange.vue";

export default {
    components: {
        BaseInput,
        ButtonOrange,
    },
};
</script>
