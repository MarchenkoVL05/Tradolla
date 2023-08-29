<template>
    <a
        class="group flex flex-col justify-between items-center gap-4 p-5 border rounded shadow hover:shadow-none"
        href="#"
    >
        <img
            class="h-16 sm:h-20 w-full object-contain"
            :src="
                index % 2 == 0
                    ? '/images/company-logo.svg'
                    : '/images/company-logo-2.jpg'
            "
            alt=""
        />
        <div class="mt-1 flex flex-col items-center gap-1 text-center">
            <span
                class="text-lg font-semibold transition-all text-slate-800 group-hover:text-orange-500"
                >Chunghwa Telecom</span
            >
            <div class="text-sm">
                Registered: <span class="font-semibold">6 years</span>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    props: ["index"],
};
</script>
