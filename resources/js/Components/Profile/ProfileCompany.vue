<template>
    <div class="rounded border p-4 bg-white">
        <div class="font-bold text-gray-800">Company:</div>
        <Link
            class="block mt-1 font-semibold uppercase text-blue-600 hover:underline"
            href="/companies/1"
            >Chunghwa Telecom</Link
        >
        <div class="text-gray-500">UK</div>
        <div class="mt-4 text-gray-800">
            Registered:
            <span class="font-semibold">6 years 11 months</span>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>
