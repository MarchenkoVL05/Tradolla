<template>
    <div
        class="flex flex-col justify-between gap-4 p-4 md:flex-row md:gap-6"
        :class="{ 'md:bg-gray-50': index % 2 == 0 }"
    >
        <div
            class="flex flex-col gap-4 min-[1368px]:flex-row min-[1368px]:gap-8"
        >
            <Link class="relative min-[1368px]:flex-shrink-0" href="/catalog/1">
                <img
                    class="rounded object-contain w-full max-h-44 sm:max-h-80 bg-gray-50 border min-[1368px]:w-[366px] min-[1368px]:h-60"
                    src="/images/example-1.jpg"
                    alt=""
                />
                <new-badge v-if="index % 2"></new-badge>
            </Link>
            <div>
                <Link
                    class="block uppercase text-sm lg:text-base text-gray-800 hover:underline"
                    href="/companies/1"
                    >LLC 'VIATSKY PLYWOOD COMBINATE'</Link
                >
                <product-title
                    >Apple iMac Pro (27-inch with Retina 5K Display, 3.0GHz
                    10-core Intel Xeon W, 1TB SSD)</product-title
                >
                <product-tags></product-tags>
                <product-descr
                    >Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Asperiores doloremque, consequuntur iusto alias illum
                    voluptates non harum. Aspernatur earum alias illo blanditiis
                    provident corrupti similique illum omnis sit, quisquam
                    facere.
                </product-descr>
            </div>
        </div>
        <product-list-card-info></product-list-card-info>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import ProductListCardInfo from "./ProductListCardInfo.vue";
import NewBadge from "../NewBadge.vue";
import ProductTitle from "./ProductTitle.vue";
import ProductTags from "./ProductTags.vue";
import ProductDescr from "./ProductDescr.vue";

export default {
    props: ["index"],

    components: {
        Link,
        ProductListCardInfo,
        NewBadge,
        ProductTitle,
        ProductTags,
        ProductDescr,
    },
};
</script>
