<template>
    <div
        class="flex flex-col justify-between gap-4 p-4 md:flex-row md:gap-6"
        :class="{ 'md:bg-gray-50': index % 2 == 0 }"
    >
        <div
            class="flex flex-col gap-4 min-[1368px]:flex-row min-[1368px]:gap-8"
        >
            <a
                class="relative min-[1368px]:flex-shrink-0"
                href="./product-details.html"
            >
                <img
                    class="rounded object-contain w-full max-h-44 sm:max-h-80 bg-gray-50 border min-[1368px]:w-[366px] min-[1368px]:h-60"
                    src="/images/example-1.jpg"
                    alt=""
                />
                <new-badge v-if="index % 2"></new-badge>
            </a>
            <div>
                <a
                    class="block uppercase text-sm lg:text-base text-gray-800 hover:underline"
                    href="./company.html"
                    >LLC 'VIATSKY PLYWOOD COMBINATE'</a
                >
                <a
                    class="block mt-2 text-lg sm:text-xl text-gray-800 font-medium hover:underline"
                    href="./product-details.html"
                    >Apple iMac Pro (27-inch with Retina 5K Display, 3.0GHz
                    10-core Intel Xeon W, 1TB SSD)
                </a>
                <product-tags></product-tags>
                <div class="mt-2 text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Asperiores doloremque, consequuntur iusto alias illum
                    voluptates non harum. Aspernatur earum alias illo blanditiis
                    provident corrupti similique illum omnis sit, quisquam
                    facere.
                </div>
            </div>
        </div>
        <product-list-card-info></product-list-card-info>
    </div>
</template>

<script>
import ProductListCardInfo from "./ProductListCardInfo.vue";
import NewBadge from "../NewBadge.vue";
import ProductTags from "./ProductTags.vue";

export default {
    props: ["index"],

    components: {
        ProductListCardInfo,
        NewBadge,
        ProductTags,
    },
};
</script>
