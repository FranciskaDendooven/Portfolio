<script setup>
import Header from '@/Components/Frontend/Header.vue';
import Footer from '@/Components/Frontend/Footer.vue';

</script>

<template>
    <div class="dark">
    <div class="bg-lightBlack text-lightBeige">
        <!--header-->
        <Header></Header>
        <main class="min-h-screen">
            <slot/>
        </main>

        <!-- footer -->
        <Footer></Footer>
    </div>
    </div>
</template>