<?php include 'header.php'; ?>

<title>Techmark - Innovating Home Solutions with European Standards</title>
<meta name="keywords" content="Techmark,	Household appliances,	Home appliances,	Water heater,	Air Conditioner,	Heat Pump,	LED Lamp,	Water Dispenser,	Deep Freezer,	Dubai,	Italy,	Turkey,	Household appliances Company in Dubai,	Household appliances Company in Italy,	Household appliances Company in Turkey,	Water heater price,	Water heater companies,	Best water heater,	Water Heater 10Liters price,	Water Heater 15Liters Price,	Air Conditioner price,	Air Conditioner companies,	Best Air Conditioner,	Air Conditioner 1ton Price,	Air Conditioner 1.5 ton Price,	Best Heat Pumps,	Water Dispenser Hot and Cold,	Water Dispenser Jar,	LED Lamp for Ceilling,	LED Lamp for Room,	LED Lamp Price,	Deep Freezer Price,	Deep Freezer 200Ltr Price,	Deep Freezer 500Ltr Price">
  <meta name="description" content="Explore Techmark's cutting-edge household appliances and lighting solutions. From water heaters to LED lamps, our products adhere to European standards.">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
  .container_v1 {
    max-width: 1400px;
    margin: 0 auto;
  }

  .sectionSlider {
    overflow: hidden;
  }

  .sliderarr button {
    color: #D7926B;
    opacity: 0.5;
    font-size: 60px;
    transition: 0.2s;
    transform: translateY(50%);
  }

  .sliderarr button:hover {
    opacity: 1;
    font-size: 80px;
    transform: translateY(50%);
  }

  .prev-sp {
    position: absolute;
    content: '';
    bottom: 50%;
    z-index: 2;
    left: 5%;
  }

  .next-sp {
    position: absolute;
    content: '';
    bottom: 50%;
    z-index: 2;
    right: 5%;
  }

  @media screen and (max-width: 767px) {
    .sliderarr button {
      font-size: 30px;
    }

    .sliderarr button:hover {
      font-size: 50px;
    }
  }
</style>

<section>
  <!-- container_v1 removed for full width -->
  <div class="mobile_none">
    <div class="sectionSlider js-sectionSlider" data-gap="30" data-slider-col="base-1 lg-1 md-0 sm-1" data-center
      data-loop data-pagination>
      <div class="mySwiper" style="margin-top:20px;">

        <div class="swiper-wrapper mt-1">

          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/water_heater_1.jpg" alt="project image"
              style="max-width:100%;">
          </div>

          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/heat_pump.jpg" alt="project image" style="max-width:100%;">
          </div>

          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/air_conditioner.jpg" alt="project image"
              style="max-width:100%;">
          </div>

          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/water_despenser.jpg" alt="project image"
              style="max-width:100%;">
          </div>

          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/led_lighting.jpg" alt="project image"
              style="max-width:100%;">
          </div>
        </div>
        <div class="sliderarr -portfolio-slider js-nav">
          <button class="sliderarr_btn -prev js-prev prev-sp onovr">&#171;</button>
          <button class="sliderarr_btn -next js-next next-sp onovr">&#187;</button>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="pagination -slider mt-48 js-pagination"></div>
    </div>
  </div>
  <div class="container_v1 desk_none">
    <div class="sectionSlider js-sectionSlider" data-gap="30" data-slider-col="base-1 lg-1 md-0 sm-1" data-center
      data-loop data-pagination>
      <div class="mySwiper" style="margin-top:54px;">
        <div class="swiper-wrapper mt-1">
          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/WH-mob.jpg" alt="project image" style="max-width:100%;">
          </div>
          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/HP-mob.jpg" alt="project image" style="max-width:100%;">
          </div>
          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/AC-mob.jpg" alt="project image" style="max-width:100%;">
          </div>
          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/WD-mob.jpg" alt="project image" style="max-width:100%;">
          </div>
          <div class="swiper-slide">
            <img class="swiper-lazy" src="img/main-sliders/LL-mob.jpg" alt="project image" style="max-width:100%;">
          </div>
        </div>
        <div class="sliderarr -portfolio-slider js-nav">
          <button class="sliderarr_btn -prev js-prev prev-sp onovr">&#171;</button>
          <button class="sliderarr_btn -next js-next next-sp onovr">&#187;</button>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="pagination -slider mt-48 js-pagination"></div>
    </div>
  </div>
</section>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    direction: "horizontal",
    centeredSlides: true,
    loop: true,
    simulateTouch: false,
    autoplay: {
      enabled: true,
      pauseOnMouseEnter: false,
      delay: 2000,
      disableOnInteraction: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".next-sp",
      prevEl: ".prev-sp",
    },
  });

</script>

<section class="layout-pt-lg layout-pb-lg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sectionHeading -top-line text-center">
          <h2 class="sectionHeading__title text-black fs-sm-3">Our Products</h2>
        </div>
      </div>
    </div>
    <div class="row y-gap-32 layout-pt-sm">
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <a href="water-heater">
              <div class="">
                <center><img src="img/water-heater/WH-1-2.png" width="100" style="color:rgba(1, 129, 74);"></center>
              </div>
              <center>
                <h3 class="service__title mt-20">Water Heater</h3>
              </center>
            </a>
            <div class="service__button">
              <a href="water-heater" class="button -simple" style="font-size:12px">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <a href="heat-pump">
              <div class="">
                <center><img src="img/heat-pump/HP-12.png" width="100"></center>
              </div>
              <center>
                <h3 class="service__title mt-20 text-center">Heat Pump</h3>
              </center>
            </a>
            <div class="service__button">
              <a href="heat-pump" class="button -simple text-white" style="color:red;font-size:12px">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <a href="air-conditioner">
              <div class="mt-1">
                <br>
                <center><img src="img/air-conditioner/AC-15.png" width="100"></center>
              </div>
              <center>
                <h3 class="service__title mt-20 text-center">Air Conditioner</h3>
              </center>
            </a>
            <div class="service__button">
              <a href="air-conditioner" class="text-white button -simple " style="color:red;font-size:12px">Read
                more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <a href="air-conditioner">
              <div class="">
                <center><img src="img/water-dispenser/water_desp.png" width="70"></center>
              </div>
              <center>
                <h3 class="service__title mt-20 text-center">Water Dispenser </h3>
              </center>
            </a>
            <div class="service__button">
              <a href="water-dispenser" class="text-white button -simple " style="color:red;font-size:12px">Read
                more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <a href="led-lighting">
              <div class="">
                <center><img src="img/led-lighting/GL-123.png" width="80"></center>
              </div>
              <center>
                <h3 class="service__title mt-20 text-center">LED Lighting </h3>
              </center>
            </a>
            <div class="service__button">
              <a href="led-lighting" class="text-white button -simple" style="color:red;font-size:12px">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div data-anim="slide-up" class="service -card -hover">
          <div class="service__content -border bg-light-2">
            <div class="">
              <center><img src="img/icon/noun-deep-freezer-2961634.svg" width="57"></center>
            </div>
            <h3 class="service__title mt-20 text-center">Deep Freezer </h3>
            <div class="mt-3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blog -->
<section class="layout-pt-lg layout-pb-lg bg-grey">
  <div class="container">
    <div class="sectionHeading -left-line text-center">

      <center>
        <h2 class="sectionHeading__title fs-sm-3">Locations</h2>
      </center>
    </div>
    <div class="row y-gap-32 layout-pt-sm">
      <div class="col-lg-4 col-md-6">
        <div data-anim-wrap class="blog -hover">
          <a data-barba href="#">
            <div class="blog__image">
              <div data-anim-child="img-right cover-black">
                <div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14468.27663493606!2d55.05493284042119!3d24.96376154431056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f0de8db330319%3A0x7de1bfd76820e45f!2sTechmark%20International%20FZE!5e0!3m2!1sen!2sin!4v1717584051125!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="100%" height="300"></iframe>
                </div>
              </div>
              <div class="blog__category">Dubai</div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div data-anim-wrap class="blog -hover">
          <a data-barba href="#">
            <div class="blog__image">
              <div data-anim-child="img-right cover-black">
                <div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.1968147130815!2d10.449303375314349!3d45.506116530642345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478190c984b5b02f%3A0x504069acb956f743!2sVia%20Benaco%2C%20125%2C%2025081%20Bedizzole%20BS%2C%20Italy!5e0!3m2!1sen!2sin!4v1699382835831!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="100%" height="300"></iframe>
                </div>
              </div>
              <div class="blog__category">Italy</div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div data-anim-wrap class="blog -hover">
          <a data-barba href="#">
            <div class="blog__image">
              <div data-anim-child="img-right cover-black">
                <div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.4503565659506!2d28.626845075030797!3d40.99351502033526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b55fcba78228c3%3A0x839893bd00f230fa!2zQWRuYW4gS2FodmVjaSwgSGFyYml5ZSBDZC4gTm86MywgMzQ1MjggQmV5bGlrZMO8esO8L8Swc3RhbmJ1bCwgVMO8cmtpeWU!5e0!3m2!1sen!2sin!4v1699383501547!5m2!1sen!2sin"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="blog__category">Turkey</div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- clients -->
<?php include 'footer.php'; ?>