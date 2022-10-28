<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Frontend from '@/Layouts/Frontend.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Contact from '@/Components/Frontend/Contact.vue';

defineProps({
    skills: Object,
    projects: Object,
})

</script>

<template>
    <Head title="Franciska Dendooven"
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
    <!-- Test Area with Contact Component -->
    <Contact></Contact>
</Frontend>
</template>
