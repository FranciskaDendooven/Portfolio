<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>
  <section id="portfolio" class="section bg-lightBeige min-h-[1400px] mt-5">
    <div class="container mx-auto">
      <div class="w-full md:w-6/12 px-4">
      <div class="flex flex-wrap">
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                <i class="fas fa-sitemap"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">CSS Components</h6>
              <Projects :skills="skills" :projects="projects"></Projects>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</template>