<script setup>
import { ref } from 'vue';
import Navbar from '@/Components/Navbar.vue'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <Navbar />
        <div class="min-h-screen bg-gray-100">


            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

