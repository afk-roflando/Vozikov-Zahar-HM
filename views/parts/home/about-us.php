<?php $about_us = $content['about_us'] ?? []; ?>
<section id="about-us" class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 video-block d-flex align-items-center justify-content-center">
                <img src="img/pc.jpg" class="video-bg">
                <a href="#" class="play d-flex align-items-center justify-content-center">
                    <img src="img/play.png" style="height: 8rem">
                </a>
            </div>
            <div class="col-ms-12 col-md-6 description-block d-flex flex-column align-items-start justify-content-center">
                <h6><?=$about_us['text']['title'] ?? '' ?></h6>
                <h1><?=$about_us['text']['subtitle'] ?? '' ?></h1>
                <p class="kek"><b><?=$about_us['text']['quote'] ?? '' ?></b></p>
                <p><?=$about_us['text']['description'] ?? '' ?></p>
                <img class="kek2" src="img/17656284_image9.gif" >
            </div>
        </div>
    </div>
</section>
