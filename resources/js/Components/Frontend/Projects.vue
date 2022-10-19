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
        <nav class="section border-lightBeige mb-12">
            
            <ul class="flex flex-col justify-between items-center mx-auto">
                <li class="cursor-pointer capitalize m-4">
                    <button
                    @click="filterProjects('all')"
                     type="" 
                     class="flex text-center px-4 py-2 border-lightBeige hover:text-lightDarkGreen"
                     :class="[selectedSkill === 'all' ? 'text-lightGreen' : '']"
                     >
                        All
                    </button>
                </li>
                <li class=" cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button
                    @click="filterProjects(projectSkill.id)"
                     type=""
                     class="text-center px-4 py-2 hover:text-lightGreen"
                     :class="[selectedSkill == projectSkill.id ? 'text-lightGreen' : '']"
                     >
                        {{projectSkill.name}}
                    </button>
                </li>
            </ul>

        </nav>

        <section class="flex flex-row">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project"></Project>
        </section>
    </div>
</template>