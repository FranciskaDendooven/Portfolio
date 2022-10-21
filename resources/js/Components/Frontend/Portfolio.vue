<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>
  <section id="portfolio" class="section bg-lightBeige min-h-[1000px]">
    <div class="container mx-auto">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title text-lightGreen">My lastest work</h2>
        <p class="subtitle text-lightGreen">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dicta omnis ducimus totam sint accusantium ullam nemo nostrum repellat voluptate vel culpa tempore tempora animi, facilis magnam incidunt eaque dignissimos.
        </p>
      </div>
    </div>
    <Projects :skills="skills" :projects="projects"></Projects>
  </section>
</template>