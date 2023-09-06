<template>
    <Link
        class="flex items-center gap-2 flex-wrap max-w-fit lg:max-w-full mt-4 p-3 sm:p-4 rounded-xl cursor-pointer border border-orange-500 bg-slate-600"
        href="/profile"
    >
        <img class="h-10" src="/images/pedro_pascal.png" alt="" />
        <div>
            <div class="text-gray-50 font-semibold">Pedro Pascal</div>
            <div class="text-gray-50 font-light text-sm">
                pedropascal@gmail.com
            </div>
        </div>
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
