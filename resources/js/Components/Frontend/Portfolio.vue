<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>
  <div class="mx-auto py-3 bg-lightDarkGreen">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title text-lightBeige font-bold">My latest work</h2>
        <p class="subtitle text-lightBeige">
          Check out some of my experiments bij clicking the skill-icons below
        </p>
      </div>
    </div>
  <section id="portfolio" class="section bg-lightBeige min-h-[750px]">
      <Projects :skills="skills" :projects="projects"></Projects>
  </section>
</template>