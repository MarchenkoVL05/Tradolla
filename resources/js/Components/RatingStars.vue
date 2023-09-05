<template>
    <div class="flex items-center gap-1">
        <img
            class="block"
            :class="{
                'h-3': size == 'small',
                'md:h-4': size == 'small',
                'h-4': size !== 'small',
                'md:h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="block"
            :class="{
                'h-3': size == 'small',
                'md:h-4': size == 'small',
                'h-4': size !== 'small',
                'md:h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="block"
            :class="{
                'h-3': size == 'small',
                'md:h-4': size == 'small',
                'h-4': size !== 'small',
                'md:h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="block"
            :class="{
                'h-3': size == 'small',
                'md:h-4': size == 'small',
                'h-4': size !== 'small',
                'md:h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="block"
            :class="{
                'h-3': size == 'small',
                'md:h-4': size == 'small',
                'h-4': size !== 'small',
                'md:h-5': size !== 'small',
            }"
            src="/images/star.svg"
            alt=""
        />
        <span
            v-if="counter"
            class="text-slate-800"
            :class="{ 'text-sm': size == 'small' }"
            >(8)</span
        >
    </div>
</template>

<script>
export default {
    props: {
        size: {
            type: String,
            default: "big",
        },
        counter: {
            type: Boolean,
            default: true,
        },
    },
};
</script>
