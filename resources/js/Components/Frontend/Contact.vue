<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  skills: Object,
  projects: Object,
})
</script>

<template>
<section class="bg-lightBlack">
  <div class="container mx-auto">
      <div class="flex flex-col items-center text-center mb-6">
          <h4 class="section-title">Contact</h4>
          <p class="subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem commodi fugiat cupiditate quisquam omnis sit, consequatur minus illum ipsum natus saepe id officiis perferendis facere, ipsa, in delectus neque eius!
          </p>
  </div>
  <div class="container flex flex-col lg:flex-row lg:gap-x-8">
      <div class="flex flex-1 flex-col items-start space-y-8 mb-12 md:flex-row lg:mb-0 lg:pt-2">
          <div class="flex flex-row sm:flex-col lg:flex-row gap-x-4">
              <div class="icon-mail">
                <div class="rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </div>
              </div>
              <div class="contact-mail">
                  <h4 class="font-body text-xl mb-1">
                      Have a question?
                  </h4>
                  <p class="mb-1 text-lightGreen">
                      I am here to help you
                  </p>
                  <p class="font-normal">
                      E-mail me at JaneDoe@example.com
                  </p>
              </div>
          </div>
          <div class="flex flex-row sm:flex-col lg:flex-row gap-x-4">
              <div class="icon-location">
                <div class="rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
              </div>
              <div class="contact-location">
                  <h4 class="font-body text-xl mb-1">
                      Location
                  </h4>
                  <p class="mb-1 text-lightGreen">
                      Ghent, Belgium
                  </p>
                  <p class="font-normal">
                      Serving clients worldwide
                  </p>
              </div>
          </div>
        </div>
    </div>
  </div>   
</section>
</template>