<script setup>
defineProps({
    project: Object,
})
</script>

<template>
    <div id="skills-popout" class="flex flex-col px-12 mb-6 lg:flex-row md:flex-row justify-evenly items-center">
        <a :href="project.project_url" target="_blank" class="group text-lightGreen justify-center text-center cursor-pointer">
            <div class="mb-6 ml-8">
                <img class="rounded-2xl h-44 justify-center" :src="project.image" :alt="project.name">
            </div>
            <span class="group-hover:text-lightDarkGreen capitalize text-sm mb-1">
                {{project.skill.name}}
            </span>
            <h3 class="group-hover:text-lightDarkGreen text-2xl font-semibold capitalize mb-6">
                {{project.name}}
            </h3>
        </a>
    </div>
</template>