<script setup>
import Header from '@/Components/Frontend/Header.vue';
import Footer from '@/Components/Frontend/Footer.vue';

</script>

<template>
    <div class="">
    <div class="bg-darkGrayBlue text-lightBeige font-body">
        <!--header-->
            <Header class="sticky top-0 z-50"></Header>
        <main class="relative min-h-screen">
            <slot/>
        </main>

        <!-- footer -->
        <Footer></Footer>
    </div>
    </div>
</template>