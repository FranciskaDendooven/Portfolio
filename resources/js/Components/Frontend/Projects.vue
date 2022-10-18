<script setup>
import Project from '@/Components/Frontend/Project.vue';

defineProps({
    skills: Object,
    projects: Object,
})

</script>

<template>
    <div class="container mx-auto">
        <nav class="section mb-12 border-b-2 border-lightBeige">
            
            <ul class="flex flex-row sm:flex-col justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button type="" class="flex text-center px-4 py-2 hover:text-lightDarkGreen">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button type="" class="flex text-center px-4 py-2 hover:text-lightBeige">
                        {{projectSkill.name}}
                    </button>
                </li>
            </ul>

        </nav>

        <section class="flex flex-row">
            <Project v-for="project in projects.data" :key="project.id" :project="project"></Project>
        </section>
    </div>
</template>