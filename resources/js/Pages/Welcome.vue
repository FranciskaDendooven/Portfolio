<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Frontend from '@/Layouts/Frontend.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Portfolio from '../Components/Frontend/Portfolio.vue';
import Promote from '../Components/Frontend/Promote.vue';
import About from '../Components/Frontend/About.vue';
import Skills from '../Components/Frontend/Skills.vue';

defineProps({
    skills: Object,
    projects: Object,
})

</script>

<template>
    <Head title="Ciska's Portfolio"
    link rel="icon" href="<%= BASE_URL %>favicon.ico"/>

<Frontend>
    <!-- Hero primary -->
    <Hero></Hero>
    <!-- Promotion secundary -->
    <Promote></Promote>
    <!-- About me secundary -->
    <About></About>
    <!-- Skills thirth -->
    <Skills :skills="skills"></Skills>
    <!-- Portfolio primary -->
    <Portfolio :skills="skills" :projects="projects"></Portfolio>
    <!-- Services? -->
    <!-- Contact primary -->
</Frontend>
</template>
