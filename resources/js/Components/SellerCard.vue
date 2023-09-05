<template>
    <div class="max-w-sm min-w-[220px] rounded border p-4 bg-white">
        <div class="font-semibold text-gray-800">Seller:</div>
        <span class="mt-1 flex items-center gap-2 text-orange-500"
            ><img class="max-h-6" src="/images/verified.svg" alt="" /> verified
            supplier</span
        >
        <Link
            class="block mt-1 font-semibold text-blue-600 hover:underline"
            href="/companies/1"
            >LLC 'VIATSKY PLYWOOD COMBINATE'</Link
        >
        <div class="text-gray-500">Russia</div>
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
