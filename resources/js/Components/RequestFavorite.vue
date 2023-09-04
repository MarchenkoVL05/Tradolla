<template>
    <div
        @click="addRequestToFavorite"
        class="flex items-center gap-2 cursor-pointer text-gray-400"
    >
        <button v-if="star">
            <img
                class="h-4"
                :src="
                    !requestAdded
                        ? '/images/star-favorite.svg'
                        : '/images/star-favorite--fill.svg'
                "
                alt=""
            />
        </button>
        <div class="text-sm">Request (№ <span>000023</span>)</div>
    </div>
</template>

<script>
export default {
    props: ["star"],

    data() {
        return {
            requestAdded: false,
        };
    },

    methods: {
        addRequestToFavorite() {
            this.requestAdded = !this.requestAdded;
        },
    },
};
</script>
