<template>
    <div class="flex flex-col gap-1 w-full">
        <product-image :src="selectedImage"></product-image>
        <div v-dragscroll class="pb-1 flex items-center gap-1 overflow-x-auto">
            <img
                v-for="(image, index) in images"
                :key="index"
                class="max-h-12 sm:max-h-16 rounded cursor-pointer border transition-all"
                :class="{ 'border-orange-500': index == selectedIndex }"
                :src="image"
                alt=""
                @click="selectImage(image), selectIndex(index)"
            />
        </div>
    </div>
</template>

<script>
import { dragscroll } from "vue-dragscroll";
import ProductImage from "./ProductImage.vue";

export default {
    components: {
        ProductImage,
    },

    directives: {
        dragscroll,
    },

    data() {
        return {
            selectedImage: "/images/example-3.jpg", // Изображение по умолчанию
            selectedIndex: 0,
            images: [
                "/images/example-3.jpg",
                "/images/example-1.jpg",
                "/images/example-2.jpg",
                "/images/example-3.jpg",
                "/images/example-1.jpg",
                "/images/example-2.jpg",
                "/images/example-3.jpg",
                "/images/example-1.jpg",
                "/images/example-2.jpg",
                "/images/example-3.jpg",
                "/images/example-1.jpg",
                "/images/example-2.jpg",
                "/images/example-3.jpg",
            ],
        };
    },
    methods: {
        selectImage(image) {
            this.selectedImage = image;
        },
        selectIndex(index) {
            this.selectedIndex = index;
        },
    },
};
</script>
