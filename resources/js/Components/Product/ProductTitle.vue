<template>
    <Link
        class="block mt-2 text-lg sm:text-xl text-gray-800 font-medium hover:underline"
        href="/catalog/1"
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
