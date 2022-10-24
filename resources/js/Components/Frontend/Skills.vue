<script setup>
defineProps({
    skills: Object,
})
</script>

<template>
     <section class="bg-lightGreen py-12">
        <div container mx-auto>
            <div class="grid grid-cols-9 md:grid-flow-col">
                <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="w-[25%]">
                </div>
            </div>
        </div>
     </section>
</template>