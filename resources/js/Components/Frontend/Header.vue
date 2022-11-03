<script setup>
 import {ref} from 'vue';
 import ApplicationLogo from '@/Components/ApplicationLogo.vue';
 const showMobileMenu = ref("false");
</script>


<template>
    
    <div class="">
        <nav class="bg-lightGreen font-body font-bold py-2 px-32 sm:px-4 dark:bg-darkGreen">
        <div class="flex flex-wrap justify-between items-center mx-auto">
            <a href="" class="flex items-center">
                <ApplicationLogo></ApplicationLogo>
                <span class="self-center text-xl font-bold font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <button
            @click="showMobileMenu = !showMobileMenu"
            data-collapse-toggle="navbar-default" type="button" class="flex flex-col items-center p-2 ml-3 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-lightBlack text-lightBlack" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="w-full md:block md:w-auto lg:block lg:w-auto"
            :class="{hidden : showMobileMenu}"
            id="home">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg md:flex-row md:space-x-8 md:mt-0">
                <li class="">
                <a href="#" class="block py-2 pr-4 pl-3 text-lightBlack hover:text-lightBeige rounded md:p-0" aria-current="page"></a>
                </li>
                <li class="rounded mb-1">
                <a href="#about" class="block py-2 pr-4 pl-3 text-lightBlack hover:text-lightBeige rounded md:border-0"></a>
                </li>
                <li class="rounded mb-1">
                <a href="#about" class="block py-2 pr-4 pl-3 text-lightBlack hover:text-lightBeige md:border-0">About & Skills</a>
                </li>
                <li class="rounded mb-1">
                <a href="#portfolio" class="block py-2 pr-4 pl-3 text-lightBlack hover:text-lightBeige md:border-0">Portfolio</a>
                </li>
                <li class="hover">
                <a href="#contact" class="block py-2 pr-4 pl-3 text-lightBlack hover:text-lightBeige md:border-0 md:p-0">Contact</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
</template>