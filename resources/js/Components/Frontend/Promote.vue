<script setup>

</script>

<template>
<div id="promote" class="pb-6">
  <div class="mx-auto w-full py-2 px-1 h-[25%]">

<div class="carousel">
  <div class="mx-auto w-[80%] py-2 px-1 h-[20%] bg-lightBeige">
    

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
</div>
</div>
</div>
</template>