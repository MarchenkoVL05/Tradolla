<template>
    <div
        class="group p-2 sm:p-4 border-b transition-all border-gray-100"
        :class="{ 'bg-slate-100': !seen, 'hover:bg-slate-200': !seen }"
    >
        <div class="flex justify-between items-start gap-4">
            <div class="flex items-center gap-4 sm:text-lg text-gray-800">
                <Link href="/profile"
                    ><img
                        class="max-h-14 rounded-full"
                        src="/images/isaac_hempstead.jpg"
                        alt=""
                /></Link>
                <div class="flex flex-col gap-1">
                    <Link class="text-sm sm:text-base hover:underline" href="#">
                        <span class="font-medium">Isaac Hempstead</span> wrote
                        you a message
                    </Link>
                    <div class="text-sm text-gray-500">10 minutes ago</div>
                </div>
            </div>
            <button
                class="flex-shrink-0 invisible group-hover:visible p-1 rounded-full bg-red-400"
            >
                <img class="h-3" src="/images/burger-close--white.svg" alt="" />
            </button>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["seen"],
    components: {
        Link,
    },
};
</script>
