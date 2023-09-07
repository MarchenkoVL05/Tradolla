<template>
    <header
        class="relative w-full h-12 flex items-center justify-between px-3 bg-white shadow"
        :class="{ 'flex-col': opened, 'h-auto': opened, 'py-3': opened }"
    >
        <the-logo></the-logo>
        <div
            class="justify-center items-center md:flex"
            :class="{
                'gap-14': !opened,
                'gap-6': opened,
                hidden: !opened,
                flex: opened,
                'flex-col': opened,
                'mt-6': opened,
            }"
        >
            <the-header-language-select> </the-header-language-select>
            <the-header-menu :opened="opened"></the-header-menu>
            <div class="flex items-center justify-center gap-6">
                <Link
                    class="text-gray-800 transition-all hover:text-orange-500"
                    href="/login"
                >
                    Sign In
                </Link>
                <Link href="/register">
                    <button-orange class="px-4 py-2">Sign Up</button-orange>
                </Link>
            </div>
        </div>
        <button
            @click="toggleHeader"
            class="absolute right-3 w-7 h-7 flex items-center justify-center md:hidden"
        >
            <img
                :src="
                    opened
                        ? '/images/burger-close.svg'
                        : '/images/burger-icon.svg'
                "
                alt=""
            />
        </button>
    </header>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import TheLogo from "./TheLogo.vue";
import TheHeaderLanguageSelect from "./Header/TheHeaderLanguageSelect.vue";
import TheHeaderMenu from "./Header/TheHeaderMenu.vue";
import ButtonOrange from "./Buttons/ButtonOrange.vue";

export default {
    components: {
        Link,
        TheLogo,
        TheHeaderLanguageSelect,
        TheHeaderMenu,
        ButtonOrange,
    },

    data() {
        return {
            opened: false,
            windowWidth: 0,
        };
    },

    methods: {
        toggleHeader() {
            this.opened = !this.opened;
        },
    },

    mounted() {
        window.addEventListener("resize", () => {
            this.windowWidth = window.innerWidth;

            if (this.windowWidth <= 768) {
                this.opened = false;
            }
        });
    },
};
</script>
