<template>
    <header
        class="relative w-full lg:flex p-3 lg:items-center lg:justify-between lg:shrink-0 bg-white shadow lg:h-12 lg:px-3"
    >
        <the-logo class="hidden lg:block lg:invisible text-gray-800"></the-logo>
        <div
            class="flex justify-between lg:justify-center items-center flex-wrap gap-4 lg:gap-14"
        >
            <the-header-language-select></the-header-language-select>
            <the-header-menu></the-header-menu>
            <the-header-profile></the-header-profile>
        </div>
    </header>
</template>

<script>
import TheHeaderMenu from "./TheHeaderMenu.vue";
import TheHeaderLanguageSelect from "./TheHeaderLanguageSelect.vue";
import TheHeaderProfile from "./TheHeaderProfile.vue";
import TheLogo from "../TheLogo.vue";

export default {
    components: {
        TheHeaderMenu,
        TheHeaderLanguageSelect,
        TheHeaderProfile,
        TheLogo,
    },
    data() {
        return {};
    },
};
</script>
