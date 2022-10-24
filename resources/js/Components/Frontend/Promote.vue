<script setup>

</script>

<template>
<div id="promote" class="bg-darkGrayBlue">
  <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
    <h2 class="text-3xl font-bold tracking-tight text-lightBeige-900 sm:text-4xl">
      <span class="block">What can I offer?</span>
      <span class="block text-LightBeige-600">Let's find out ;)</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="#"
        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 hover:bg-indigo-700 px-5 py-3 text-base font-medium text-white">Check out my work!</a>
      </div>
    </div>
  </div>
</div>

<div class="carousel">
    <div class="carousel-inner">
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item">
            <img src="../../../../public/images/Img_Portfolio/Wireframe and Mockup.png" class="mx-[35%]">
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <img src="../../../../public/images/Img_Portfolio/Atrium Mockup.png" class="mx-[40%]">
        </div>
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <img src="../../../../public/images/Img_Portfolio/About.jpg" class="mx-[30%]">
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <ol class="carousel-indicators">
            <li>
                <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-bullet">•</label>
            </li>
        </ol>
    </div>
</div>
</template>