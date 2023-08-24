<template>
    <aside
        class="lg:fixed lg:h-full lg:max-h-full overflow-y-auto p-3 lg:p-4 shrink-0 shadow z-10 bg-slate-900"
        :class="{ 'lg:w-72': asideOpen, 'w-16': !asideOpen }"
    >
        <div class="min-h-full flex flex-col justify-between gap-8">
            <div class="flex flex-col gap-8 break-all">
                <div
                    class="flex justify-between items-center gap-3 flex-row-reverse lg:justify-start lg:flex-row"
                >
                    <the-aside-burger-left
                        :open="asideOpen"
                        @squezee="toggleAside(asideOpen)"
                    ></the-aside-burger-left>
                    <the-aside-burger-top
                        :open="menuOpen"
                        @openTop="openTopMenu"
                    ></the-aside-burger-top>
                    <the-logo
                        v-if="asideOpen"
                        class="block lg:text-2xl text-white"
                    ></the-logo>
                </div>
                <the-aside-menu
                    v-if="asideOpen"
                    :menuLinks="asideMenuLinks"
                    :open="menuOpen"
                ></the-aside-menu>
            </div>
            <div v-if="menuOpen || (asideOpen && windowWidth >= 1024)">
                <a class="group flex items-end gap-2 cursor-pointer" href="#"
                    ><img
                        class="max-h-7 group-hover:-translate-x-1 transition-all"
                        src="/images/log-out-icon.svg"
                        alt=""
                    /><span class="text-lg font-thin text-white"
                        >Log out</span
                    ></a
                >
                <the-aside-profile-card
                    :open="menuOpen"
                ></the-aside-profile-card>
            </div>
        </div>
    </aside>
    <div
        class="hidden lg:block lg:h-full lg:shrink-0"
        :class="{ 'lg:w-72': asideOpen, 'w-16': !asideOpen }"
    ></div>
</template>

<script>
import TheAsideMenu from "./TheAsideMenu.vue";
import TheAsideProfileCard from "./TheAsideProfileCard.vue";
import TheLogo from "../TheLogo.vue";
import TheAsideBurgerLeft from "./TheAsideBurgerLeft.vue";
import TheAsideBurgerTop from "./TheAsideBurgerTop.vue";

export default {
    components: {
        TheAsideMenu,
        TheAsideProfileCard,
        TheLogo,
        TheAsideBurgerLeft,
        TheAsideBurgerTop,
    },

    data() {
        return {
            asideOpen: true,
            menuOpen: false,
            windowWidth: window.innerWidth,
            asideMenuLinks: [
                {
                    title: "Home",
                    image: "/images/home-icon.svg",
                    links: ["Dashboard", "Favorites", "Notifications"],
                    isOpen: true,
                },
                {
                    title: "Procurements",
                    image: "/images/document.svg",
                    links: ["Procurement processes", "Our proposals", "Orders"],
                    isOpen: false,
                },
                {
                    title: "E-commerce",
                    image: "/images/cart-icon.svg",
                    links: ["Catalog", "Our products"],
                    isOpen: false,
                },
                {
                    title: "Social",
                    image: "/images/social.svg",
                    links: ["Companies", "Chat and calls", "Profile"],
                    isOpen: false,
                },
            ],
        };
    },

    mounted() {
        window.addEventListener("resize", () => {
            this.windowWidth = window.innerWidth;

            if (this.windowWidth <= 1024) {
                this.asideOpen = true;
                this.menuOpen = false;
            }
        });
    },

    methods: {
        toggleAside() {
            this.asideOpen = !this.asideOpen;
        },

        openTopMenu() {
            this.menuOpen = !this.menuOpen;
        },
    },
};
</script>
