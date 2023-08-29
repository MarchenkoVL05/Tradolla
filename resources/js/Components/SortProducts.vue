<template>
    <div
        class="mt-2 flex justify-between items-center flex-wrap gap-2 rounded md:gap-4"
    >
        <div class="font-medium">Showing 1-24 of 205 Products</div>
        <div class="flex items-center flex-wrap gap-3">
            <div class="flex items-center gap-3">
                <div
                    class="h-6 w-6 flex justify-center items-center border shadow rounded transition-all bg-white hover:border-orange-500"
                >
                    <a href="./product-list.html"
                        ><img class="h-4" src="/images/list.svg" alt=""
                    /></a>
                </div>
                <div
                    class="h-6 w-6 flex justify-center items-center border shadow rounded transition-all bg-white hover:border-orange-500"
                >
                    <a href="./product-grid.html"
                        ><img class="h-4" src="/images/grid.svg" alt=""
                    /></a>
                </div>
            </div>
            <span>Sort by:</span>
            <select
                class="px-2 py-1 border rounded text-gray-500 bg-white focus:outline-none focus:border-orange-600"
            >
                <option value="Best match">Best match</option>
                <option value="Newest">Newest</option>
                <option value="Price">Price</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {};
</script>
