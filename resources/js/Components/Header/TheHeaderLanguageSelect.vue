<template>
    <div class="relative z-10">
        <button
            @click="showLanguageList"
            class="pr-3 flex items-center gap-1 cursor-pointer bg-white"
        >
            <img class="max-h-5" src="/images/english.png" alt="" />
            English
            <img
                class="max-h-4 transition-all"
                :class="{ 'rotate-180': languageListOpen }"
                src="/images/arrow-btn-icon.svg"
                alt=""
            />
        </button>
        <transition name="lang">
            <div
                v-if="languageListOpen"
                class="absolute top-10 bg-white w-[200%] max-w-[170px] rounded shadow overflow-auto transition-all"
            >
                <a
                    class="flex items-start gap-1 p-3 border-b border-gray-100 hover:bg-slate-100"
                    href="#"
                    ><img
                        class="block max-h-5"
                        src="/images/farsi.png"
                        alt=""
                    />
                    Farsi
                </a>
                <a
                    class="flex items-start gap-1 p-3 border-b border-gray-100 hover:bg-slate-100"
                    href="#"
                    ><img
                        class="block max-h-5"
                        src="/images/russian.png"
                        alt=""
                    />
                    Russian
                </a>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return {
            languageListOpen: false,
        };
    },

    methods: {
        showLanguageList() {
            this.languageListOpen = !this.languageListOpen;
        },
    },
};
</script>

<style scoped>
.lang-enter-active,
.lang-leave-active {
    transition: all 0.1s ease-in-out;
}
.lang-enter-from,
.lang-leave-to {
    opacity: 0;
    transform: translateY(-5px);
}
</style>
