<template>
    <div
        v-for="(menu, menuIndex) in menuLinks"
        :key="menu.title"
        class="lg:flex flex-col p-3 sm:p-4 rounded-lg shadow font-light bg-slate-800 text-white"
        :class="{ 'gap-3': menu.isOpen, flex: open, hidden: !open }"
    >
        <div
            @click="toggleLinks(menuIndex)"
            class="flex items-center justify-between cursor-pointer"
        >
            <div class="flex items-center gap-2 text-lg sm:text-xl">
                <img class="h-4 sm:h-5" :src="menu.image" alt="" />
                <span>{{ menu.title }}</span>
            </div>
            <img
                class="max-h-4 sm:max-h-5 translate-180 transition-all"
                :class="{ 'rotate-180': menu.isOpen }"
                src="/images/arrow-btn-icon--white.svg"
                alt=""
            />
        </div>
        <div class="flex flex-col gap-3" v-if="menu.isOpen">
            <Link
                v-for="(link, linkIndex) in menu.links"
                :key="linkIndex"
                class="text-sm sm:text-base transition-all hover:text-orange-400"
                :class="{
                    'text-orange-400': new RegExp(`^${link.url}(\\?|$)`).test(
                        $page.url
                    ),
                }"
                :href="link.url"
            >
                {{ link.name }}
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },

    props: ["menuLinks", "open"],

    methods: {
        toggleLinks(index) {
            this.menuLinks[index].isOpen = !this.menuLinks[index].isOpen;
        },
    },
};
</script>
