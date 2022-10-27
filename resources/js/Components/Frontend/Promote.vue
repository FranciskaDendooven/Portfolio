<script setup>

</script>

<template>
<div id="promote" class="pb-6">
  <div class="mx-auto w-full py-2 px-1 h-[25%]">

    <div class="carousel">
    <div class="mx-auto w-[80%] py-2 px-1 h-[20%] bg-lightBeige">
        

        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item flex justify-around shrink">
                <a href="https://www.figma.com/file/4bcPaoXXpAdLrxNlbIYmhm/Wireframe-Portfolio?node-id=0%3A1">
                    <img src="../../../../public/images/Img_Portfolio/wireframe_mockup.png" alt="Two images. The first image is in Black-Gray-White and represents the wireframe for the portfolio website. The second image is the mockup portfolio website in fluorescent Green, Black, White-Gray and Gray-Blue colors. Use of Figma." >
                </a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item flex justify-around shrink">
                <a href="https://app.moqups.com/Ii9LUJ06rOQS2lirSsafTnKjMxPmJvCo/view/page/a5740137f">
                    <img src="../../../../public/images/Img_Portfolio/atrium_mockup.png" alt="A mockup of the Atrium project. Colors used are Dark-Blue, Gray-White, Red-Orange, Light-Indigo-Blue. Use of Moqup.">
                </a>
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item flex shrink justify-around">
                <a href="https://dev.to/ciska/take-a-shorter-route-with-restful-controllers-24lk">
                    <img src="../../../../public/images/Img_Portfolio/DevTo-Article.png" alt="Screenshot of a dev.to article. Article is about RESTful Controllers. The screenshot contains a Meme of a chillin' Not cat with a towel around it's head and cucumber slices for his/her eyes.">
                </a>
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