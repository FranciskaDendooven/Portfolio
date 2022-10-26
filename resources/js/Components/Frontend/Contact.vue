<script setup>
import Projects from '@/Components/Frontend/Projects.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>
<section id="contact" class="bg-lightBlack text-lightBeige">
  <div class="container mx-auto px-32">
      
      <div class="flex flex-col lg:flex-row lg:gap-x-8">
      <div class="flex flex-1 flex-col justify-around items-start space-y-8 mb-12 md:flex-row lg:mb-0 lg:pt-2">

        <div class="flex flex-row sm:flex-col lg:flex-row gap-x-4">
              <div class="contact">
                <div class="rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                  </svg>
                </div>
              </div>
              <div class="contact">
                  <h4 class="font-body text-m mb-1">
                    Contact
                  </h4>
                  <p class="mb-1 text-lightGreen text-sm">
                    Feel free to contact me for questions, <br> proposals, co-op's.
                  </p>
                  <p class="text-sm">
                    Looking forward to meeting you!
                  </p>
              </div>
              
        </div>

          <div class="flex flex-row sm:flex-col lg:flex-row gap-x-4">
              <div class="icon-mail">
                <div class="rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </div>
              </div>
              <div class="contact-mail">
                  <h4 class="font-body text-m mb-1">
                      Have a question?
                  </h4>
                  <p class="mb-1 text-lightGreen text-sm">
                      I am here to help you
                  </p>
                  <p class="text-sm">
                      E-mail me at 
                     <Link href="mail_to">JaneDoe@example.com</Link>
                  </p>
              </div>
          </div>

          <div class="flex flex-row sm:flex-col lg:flex-row gap-x-4">
              <div class="icon-location">
                <div class="rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
              </div>
              <div class="contact-location">
                  <h4 class="font-body text-m mb-1">
                      Location
                  </h4>
                  <p class="mb-1 text-lightGreen text-sm">
                      Ghent, Belgium
                  </p>
                  <p class="text-sm">
                      Serving clients worldwide
                  </p>
              </div>
          </div>
        </div>
    </div>
  </div>   
  <div class="flex-1 flex flex-col items-center pt-8 pb-6 lg:items-start">
    <button type="" class="btn btn-md bg-lightGreen text-lightBlack font-bold py-1 pb-1 px-2 rounded-full hover:bg-lightDarkGreen hover:text-lightBeige md:btn-lg transition-all">
        <a href="#navbar-default">Home</a>
    </button>
  </div>
</section>
</template>