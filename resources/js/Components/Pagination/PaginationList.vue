<template>
    <div class="py-4">
        <div class="flex justify-center items-center gap-2">
            <pagination-button>1</pagination-button>
            <pagination-button>2</pagination-button>
            <pagination-button>3</pagination-button>
            <pagination-button>
                <img
                    class="h-4 -rotate-90"
                    src="/images/arrow-btn-icon.svg"
                    alt=""
                />
            </pagination-button>
        </div>
    </div>
</template>

<script>
import PaginationButton from "./PaginationButton.vue";

export default {
    components: {
        PaginationButton,
    },
};
</script>
