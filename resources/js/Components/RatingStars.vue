<template>
    <div class="flex items-center gap-1">
        <img
            class="max-h-4 md:max-h-5"
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="max-h-4 md:max-h-5"
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="max-h-4 md:max-h-5"
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="max-h-4 md:max-h-5"
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
            }"
            src="/images/star--fill.svg"
            alt=""
        />
        <img
            class="max-h-4 md:max-h-5"
            :class="{
                'max-h-3': size == 'small',
                'md:max-h-4': size == 'small',
            }"
            src="/images/star.svg"
            alt=""
        />
        <span class="text-slate-800">(8)</span>
    </div>
</template>

<script>
export default {
    props: ["size"],
};
</script>
