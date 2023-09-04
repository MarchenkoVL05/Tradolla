<template>
    <div
        class="px-4 py-2 text-sm flex flex-col border-b"
        :class="{ 'bg-gray-50': index % 2 == 0 }"
    >
        <Link href="/procurements/orders/1" class="font-medium hover:underline"
            ><span class="sm:text-lg text-blue-500">#{{ index }}</span> by Ricky
            Antony</Link
        >
        <a
            class="text-blue-500 hover:text-orange-500"
            href="mailto:ricky@example.com"
        >
            ricky@example.com
        </a>
    </div>
    <div
        class="px-4 py-2 text-sm flex items-center border-b"
        :class="{ 'bg-gray-50': index % 2 == 0 }"
    >
        16 september 2023
    </div>
    <Link
        class="px-4 py-2 text-sm flex items-center border-b font-medium hover:underline"
        :class="{ 'bg-gray-50': index % 2 == 0 }"
        href="/procurements/1"
        >Construction Services for Office Expansion Project
    </Link>
    <button
        class="px-4 py-2 text-sm flex items-center border-b text-orange-500 hover:underline"
        :class="{ 'bg-gray-50': index % 2 == 0 }"
    >
        delete
    </button>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["index"],
    components: {
        Link,
    },
};
</script>
