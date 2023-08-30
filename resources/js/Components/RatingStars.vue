<template>
    <div class="flex items-center gap-1">
        <img
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
                'max-h-4': size !== 'small',
                'md:max-h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
                'max-h-4': size !== 'small',
                'md:max-h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
                'max-h-4': size !== 'small',
                'md:max-h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
                'max-h-4': size !== 'small',
                'md:max-h-5': size !== 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
                'max-h-4': size !== 'small',
                'md:max-h-5': size !== 'small',
            }"
            src="/images/star.svg"
            alt=""
        />
        <span class="text-slate-800" :class="{ 'text-sm': size == 'small' }"
            >(8)</span
        >
    </div>
</template>

<script>
export default {
    props: ["size"],
};
</script>
