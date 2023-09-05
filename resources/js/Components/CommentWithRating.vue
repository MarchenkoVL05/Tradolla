<template>
    <div class="border-b">
        <div class="flex gap-2">
            <rating-stars :counter="false"></rating-stars>
            <div class="font-semibold">by Drik Smith</div>
        </div>
        <span class="block mt-1 text-sm text-gray-500">October 14, 2019</span>
        <p class="mt-4 text-gray-600">
            You shouldn't need to read a review to see how nice and polished
            this theme is. So I'll tell you something you won't find in the
            demo. After the download I had a technical question, emailed the
            team and got a response right from the team CEO with helpful advice.
        </p>
    </div>
</template>

<script>
import RatingStars from "./RatingStars.vue";

export default {
    components: {
        RatingStars,
    },
};
</script>
