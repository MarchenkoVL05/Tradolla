<template>
    <div
        v-for="index in 6"
        :key="index"
        class="grid grid-cols-12 col-span-12"
        :class="{ 'bg-slate-100': index % 2 == 0 }"
    >
        <div class="col-span-3 p-4">
            Order by
            <Link class="text-blue-500 hover:underline" href="#"
                >Segezha Group
            </Link>
        </div>
        <Link class="col-span-7 p-4 font-medium hover:underline" href="#"
            >Construction Services for Office Expansion Project
        </Link>
        <div class="col-span-2 p-4">
            <Link class="text-orange-500 hover:underline" href="#"
                >Open order
            </Link>
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
