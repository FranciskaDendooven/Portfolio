<script setup>
import Project from '@/Components/Frontend/Project.vue';
import {ref} from 'vue';


const props = defineProps({
    skills: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);

const selectedSkill = ref("all");

const filterProjects = (id) => {
    if(id === "all"){
        filteredProjects.value = props.projects.data
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
};

</script>

<template>
 
    <div class="container mx-auto">
        <nav class="border-b-2 border-lightBeige mb-12 text-lightDarkGreen">
            
            <ul class="flex flex-col md:flex-row lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button
                    @click="filterProjects('all')"
                     type="" 
                     class="flex text-center px-4 py-2 text-lightDarkGreen hover:text-darkGrayBlue"
                     :class="[selectedSkill === 'all' ? 'text-lightGreen' : '']"
                     >
                        All
                    </button>
                </li>
                <li class=" cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button
                    @click="filterProjects(projectSkill.id)"
                     type=""
                     class="flex text-center px-4 py-2 text-lightDarkGreen hover:text-darkGrayBlue"
                     :class="[selectedSkill == projectSkill.id ? 'text-lightGreen' : '']"
                     >
                        {{projectSkill.name}}
                    </button>
                </li>
            </ul>

        </nav>

        <section class="">
            <div class="flex flex-wrap justify-center md:flex-2 md:flex-row lg:mb-0 lg:pt-2">
                <Project v-for="project in filteredProjects" :key="project.id" :project="project"></Project>
            </div>
        </section>
    </div>
</template>