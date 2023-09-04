<template>
    <div class="h-fit rounded p-4 border text-gray-800 bg-white">
        <div class="flex justify-between items-center flex-wrap gap-4">
            <div class="flex flex-col gap-1">
                <Link
                    class="inline-block text-blue-500 hover:underline"
                    href="/companies/1"
                    >Chunghwa Telecom Ltd.</Link
                >
                <span class="flex items-center gap-2 text-orange-500"
                    ><img class="max-h-6" src="/images/verified.svg" alt="" />
                    verified supplier</span
                >
            </div>
            <Link href="/companies/1">
                <img class="h-14" src="/images/company-logo.svg" alt="" />
            </Link>
        </div>
        <div class="mt-1 text-gray-500">Russia</div>
        <div class="mt-2 text-gray-800">
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
