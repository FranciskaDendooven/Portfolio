
<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Contact from './Contact.vue';

</script>

<template>
    <footer class="bg-lightGreen px-32 py-12">
        <div class="">
            <div class="flex flex-col space-y-6 items-center justify-between lg:space-y-2 md:flex-row">
                <div class=" flex space-x-6 items-center justify-center">
                <ApplicationLogo/>
                </div>
                <p class="text-gray-100 opacity-80 text-[12px]">
                    &copy;2022 Ciska.com All Rights Reserved.
                </p>
            </div>

            
        </div>
    </footer>
</template>