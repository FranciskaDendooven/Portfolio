<script setup>
import Header from '@/Components/Frontend/Header.vue';

</script>

<template>
    <div class="dark">
    <div class="bg-lightBlack">
        <!--header-->
        <Header></Header>
        <main class="min-h-screen">
            <slot/>
        </main>

        <!-- footer -->
        <footer>
        </footer>
    </div>
    </div>
</template>