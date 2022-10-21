<script setup>
defineProps({
    project: Object,
})
</script>

<template>
    <div class="relative flex flex-col lg:flex-row md:flex-row justify-evenly items-center">
        <a :href="project.project_url" class="group text-lightBlack items-center text-center cursor-pointer">
            <div class="mb-6">
                <img class="rounded-2xl h-56 items-center" :src="project.image" :alt="project.name">
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