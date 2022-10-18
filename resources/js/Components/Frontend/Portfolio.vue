<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>



    <!-- component -->
    <div class="card-body">
                  <slider-component></slider-component>
                </div>
<div id="portfolio" class="section bg-darkGrayBlue">  
    <div class="container mx-auto px-6 text-gray-500">
        <div class="mx-auto grid gap-6 sm:w-3/4 md:w-full md:grid-cols-3">
            <div class="flex flex-col items-center text-center bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 md:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">My latest work</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-purple-600">Know more</a>
                    <Projects :skills="skills" :projects="projects"></Projects>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <!-- <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 md:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">UI Design</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-purple-600">Know more</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 md:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-purple-900">UX Design</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-purple-600">Know more</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
            </div> -->
        </div>
    </div>
</div>
</template>