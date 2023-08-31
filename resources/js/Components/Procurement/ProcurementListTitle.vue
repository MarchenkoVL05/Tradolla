<template>
    <Link
        class="inline-block transition-all xl:text-lg text-orange-500 hover:text-slate-800"
        href="/procurements/1"
    >
        <slot></slot>
    </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>
