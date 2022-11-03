<script setup>
 import TextAnimationName from '@/Components/Frontend/TextAnimationName.vue';
</script>

<template>
    <div class="page">

    <section id="home" class="flex flex-wrap bg-lightBlack items-center lg:py-0 overflow-hidden">
        <div class="container pb-12 mx-auto h-full">
            <div class="flex flex-col px-32 lg:px-32 md:flex-row mx-auto h-full pt-8">
                <div class="flex-1 flex flex-col font-[Poppins, sans serif] items-start pt-8 lg:items-start"> 

                    <TextAnimationName class="ml-[-4rem] w-full "></TextAnimationName>

                    <p id="text-grows-and-stayes-big" class="pt-4 pb-4 max-w-[480px] lg:text-left">TRY - FAIL - LEARN - <b id="lightGreen-text-grows-and-stayes-big">REPEAT</b>
                    </p>
                    <p class="pb-8 w-full text-lg lg:text-left">
                    Want to know more? Check out About & Skills by clicking the button below.
                    </p>
                    <button type="" class="btn btn-md bg-lightGreen text-lightBlack font-bold py-1 pb-.5 px-2 rounded-full hover:bg-lightDarkGreen hover:text-lightBeige md:btn-lg transition-all">
                        <a href="#about">Push Me (to the limits)</a>
                    </button>
                </div>
                <div class="hidden lg:flex flex-1 justify-end items-end h-full">
                    <img id="profile-picture" src="../../../../public/images/Img_Portfolio/ProfilePicCoverImg/IMG_6355_Web.jpg" class="w-[50%] h-auto opacity-70 hover:opacity-100" alt="">
                </div>
            </div>
        </div>
    </section>

    </div>
</template>