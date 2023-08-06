<script>

export default {
    props: {
        image: String,
        title: String,
        description: String,
        price: Number,
        foodType: String,
    },
    methods: {
        handleRoute() {

        },
    },
};
</script>

<template>
    <div
        class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
        <span
            class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4">{{
                foodType }}</span>
        <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" :src="image" alt="" />
        <div class="flex flex-col items-center my-3 space-y-2">
            <h1 class="text-gray-900 poppins text-lg">{{ title }}</h1>
            <p class="text-gray-500 poppins text-sm text-center">{{ description }}</p>
            <h2 class="text-gray-900 poppins text-2xl font-bold">${{ price }}</h2>
            <button
                class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105"
                @click="handleRoute">Order Now</button>
        </div>
    </div>
</template>
  
