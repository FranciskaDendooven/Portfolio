<script setup>
defineProps({
    project: Object,
})
</script>

<template>
    <div class="container flex flex-col justify-between items-center mx-auto">
        
    
    <a :href="project.project_url" class="group px-4 items-center text-center cursor-pointer">
    <div class="mb-6">
        <img class="rounded-2xl h-56" :src="project.image" :alt="project.name">
    </div>
    <span class="group-hover:text-lightDarkGreen capitalize text-sm mb-3">
        {{project.skill.name}}
    </span>
    <h3 class="group-hover:text-lightDarkGreen text-2xl font-semibold capitalize mb-3">
        {{project.name}}
    </h3>
    </a>
</div>
</template>