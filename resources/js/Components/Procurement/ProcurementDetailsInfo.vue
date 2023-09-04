<template>
    <div class="rounded p-4 border bg-white">
        <div
            class="flex justify-between flex-col-reverse sm:flex-row flex-wrap gap-1"
        >
            <request-favorite :star="true"></request-favorite>
            <span class="text-lg text-green-500">Opened</span>
        </div>
        <div class="mt-1 text-lg md:text-xl font-medium">
            Construction Services for Office Expansion Project
        </div>
        <div class="mt-2 flex gap-4 text-gray-500">
            <div>
                published:
                <span class="font-medium text-gray-800">12.04.23</span>
            </div>
            <div>
                deadline:
                <span class="font-medium text-gray-800">31.12.23</span>
            </div>
        </div>
        <div class="mt-2 text-lg font-medium">
            Budget: <span class="text-orange-500">$ 12000</span>
        </div>
        <div class="mt-4 flex gap-4 flex-wrap md:gap-14 md:flex-nowrap">
            <div>
                <div>Categories of goods and services:</div>
                <ul class="mt-1 flex flex-col gap-2 list-disc pl-5 font-medium">
                    <li>office Equipment</li>
                    <li>construction equipment</li>
                    <li>appliances</li>
                    <li>outdoor gear</li>
                </ul>
            </div>
            <div>
                <div>Delivery or service provision addresses:</div>
                <ul class="mt-1 flex flex-col gap-2 list-disc pl-5 font-medium">
                    <li>New York, USA</li>
                    <li>London, United Kingdom</li>
                    <li>Tokyo, Japan</li>
                    <li>Los Angeles, USA</li>
                </ul>
            </div>
        </div>
        <Link
            class="inline-block mt-6 py-3 px-6 transition-all rounded bg-orange-500 text-white font-semibold hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
            href="/procurements/1/create"
            >Respond to posting</Link
        >
        <div class="mt-4 font-medium">
            Comment:
            <span class="font-normal"
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                nemo enim esse, praesentium doloremque voluptatem deleniti ullam
                quod excepturi placeat amet neque ab perferendis quidem eaque
                adipisci iste alias vel.</span
            >
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import RequestFavorite from "../RequestFavorite.vue";

export default {
    components: {
        Link,
        RequestFavorite,
    },
};
</script>
