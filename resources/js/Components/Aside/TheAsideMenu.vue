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
        <ul class="flex flex-col" :class="{ 'gap-3': menu.isOpen }">
            <li v-for="(link, linkIndex) in menu.links" :key="linkIndex">
                <a
                    v-if="menu.isOpen"
                    class="text-sm sm:text-base transition-all hover:text-orange-400"
                    href="./offers.html"
                >
                    {{ link }}
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["menuLinks", "open"],

    methods: {
        toggleLinks(index) {
            this.menuLinks[index].isOpen = !this.menuLinks[index].isOpen;
        },
    },
};
</script>
