<?php
include_once "./include/frontendHeader.php";
?>

<!-- Events Section -->
<section id="events" class="events section">

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
          <h3>Custom Parties</h3>
          <div class="price align-self-start">$99</div>
          <p class="description">
            Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
          </p>
        </div><!-- End Event item -->

        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
          <h3>Private Parties</h3>
          <div class="price align-self-start">$289</div>
          <p class="description">
            In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
          </p>
        </div><!-- End Event item -->

        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
          <h3>Birthday Parties</h3>
          <div class="price align-self-start">$499</div>
          <p class="description">
            Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
          </p>
        </div><!-- End Event item -->

        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-4.jpg)">
          <h3>Wedding Parties</h3>
          <div class="price align-self-start">$899</div>
          <p class="description">
            Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
          </p>
        </div><!-- End Event item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Events Section -->

<?php
include_once "./include/frontendFooter.php";
?>