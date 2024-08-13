<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon.png">
    <link rel="manifest" href="img/logo/favicon.png">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <!-- Stylesheets -->
    <link rel="stylesheet" href="css/vendors.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Favicon -->
    <title>Techmark</title>
    <style>
#fixedButton {
    position: fixed;
    bottom: 250px;
    font-family:'Poppins', sans-serif;
    right: 20px;
    padding: 10px;
    background-color: #fff;
    color: #fff;
    cursor: pointer;
    z-index:2;
    border-radius:05px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#fixedButton1 {
    position: fixed;
    bottom: 200px;
    right: 20px;
    padding: 10px;
    background-color: #111;
    color: #fff;
    cursor: pointer;
     z-index:2;
    border-radius:05px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.sectionSlider{
    max-width: 1000px !important;
    overflow: hidden;
}
@media screen and (max-width:767px) {
    .sectionHeading__title{
        text-align: center;
    }
    .sliderNav{
        right: 0;
        justify-content: center;
    }
    #fixedButton {
    bottom: 200px;
    padding: 6px;
}
#fixedButton1 {
    bottom: 160px;
    padding: 6px;
}
}
</style>
</head>
<body >
  <!-- preloader start -->
    <div class=" js-preloader">
        <!--<div class="preloader__bg"></div>
        <div class="preloader__progress">
            <img src="img/logo/1.png" alt="preloader image" class="preloader__img">
        </div>-->
    </div>
    <!--<div class="cursor js-cursor">
        <div class="cursor__wrapper">
            <div class="cursor__follower js-follower"></div>
            <div class="cursor__label js-label"></div>
            <div class="cursor__icon js-icon"></div>
        </div>
    </div>-->
    <div class="barba-container" data-barba="container">
        <main class="main-content has-topbar">
            <header class="header -home-3  -sticky-dark js-header">
                <div class="header__bar js-header-bar bg-white">
                    <div class="row justify-content-between align-items-center me-0">
                        <div class="col-auto z-5 js-header-item">
                            <div class="header__item -margin-sm">
                                <div class="header__logo text-white js-header-logo">
                                    <a data-barba href="index">
                                    <img  src="img/logo/2.png" alt="techmark" width="200">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu js-menu ">
                            <div class="mobile__background js-mobile-bg"></div>
                            <div class="menu__container">
                                <div class="mobile__back js-nav-list-back pointer-events-none mobile_none">
                                      <a href="index">Home</a>
                                </div>
                                <ul class="nav js-navList ">
                                    <li class="text-black">
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="text-black ">
                                        <a href="about-us">About Us</a>
                                    </li>
                                    <li class="text-black -has-mega-menu">
                                        <a data-barba href="#">Products</a>
                                        <div class="mega">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="mega__menu">
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                    <center><h4 class="mega__title">Water Heater</h4>
                                                                      <a href="water-heater"><img src="img/icon/water-heater1.svg" width="100" style="color:rgba(1, 129, 74);"></a></center>
                                                                </div>
                                                            </li>
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                   <center> <h4 class="mega__title">Heat Pump</h4>
                                                                        <a href="heat-pump"><img src="img/icon/heat_pump.svg" width="100"></a></center>
                                                                </div>
                                                            </li>
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                   <center> <h4 class="mega__title">Air Conditioner</h4>
                                                              	    <a href="air-conditioner"><img src="img/icon/air-conditioner.svg" width="100"></a></center>
                                                                </div>
                                                            </li>
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                    <center><h4 class="mega__title">Water Dispenser</h4>
                                                                    <a href="water-dispenser"><img src="img/icon/water-dispenser.svg" width="100"></a></center>
                                                                </div>
                                                            </li>
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                    <center><h4 class="mega__title">LED Lighting</h4>
                                                                    <a href="led-lighting"><img src="img/icon/led-lamp.svg" width="100"></a></center>
                                                                </div>
                                                            </li>
                                                            <li class="mega__column">
                                                                <div class="mega__item">
                                                                   <center> <h4 class="mega__title">Deep Freezer</h4>
                                                                    <img src="img/icon/comming.svg" width="100" style="margin-top: 05px;margin-left: 20px;color:rgba(216, 65, 41)"></center>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="text-black ">
                                        <a  href="partners">Partners</a>
                                    </li>
                                    <li class="text-black">
                                        <a href="manufacturing">Manufacturing</a>
                                    </li>
                                    <li class="text-black">
                                        <a  href="media">Media</a>
                                    </li>
                                    <li class="text-black">
                                        <a href="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile__footer js-mobile-footer">
                                <div class="mobile__socials">
                                    <a data-barba href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="mobile__copyright">
                                  <img src="img/general/logo-light.svg" alt="logo" class="icon">
                                  <p>© 2024 Autothon. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto sm:pos-unset js-header-item pe-0">
                            <div class="header__icons">
                                <div class="header__menu">
                                    <button type="button" class="nav-button-open md:d-none">
                                    <a href="http://wa.me/+918888881935"><img src="img/wp-icon.png" width="50"></a>
                                    </button>
                                    <button type="button" class="nav-button-open d-none md:d-block js-nav-open">
                                        <i class="icon text-black icon-menu"></i>
                                    </button>
                                    <button type="button" class="nav-button-close d-none md:d-block pointer-events-none js-nav-close">
                                        <i class="icon text-black icon-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="content-wrapper  js-content-wrapper">
                <aside class="sidebar js-sidebar">
                    <div class="sidebar__cross">
                        <button class="button js-sidebar-close text-white">
                            <i class="icon icon-cross"></i>
                        </button>
                    </div>
                    <div class="sidebar__header">
                        <div class="sidebar__logo">
                            <img src="img/general/logo-light.svg">
                        </div>
                        <h4 class="title">HELLIX</h4>
                        <p class="subtitle">AN-AWARD WINNING ARCHITECTURE COMPANY</p>
                    </div>
                    <div class="sidebar__instagram">
                        <h5 class="title">#hellix</h5>
                        <div class="instagram">
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/1.jpg"></div>
                            </div>
                            <div class="instagram__content">
                              <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/2.jpg"></div>
                            </div>
                            <div class="instagram__content">
                                <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/3.jpg"></div>
                            </div>
                            <div class="instagram__content">
                                <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/4.jpg"></div>
                            </div>
                            <div class="instagram__content">
                                <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/5.jpg"></div>
                            </div>
                            <div class="instagram__content">
                                <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="#" class="instagram__item">
                            <div class="instagram__image">
                                <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/6.jpg"></div>
                            </div>
                            <div class="instagram__content">
                                <i class="icon fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__info">
                    <h5 class="title">Let's Start a Project</h5>
                    <p class="text">
                      T: +1 333 436 1747<br>
                      M: hi@hellix.com
                    </p>
                    <p class="text">
                      A: PO Box 16122 Collins Street West<br>
                      Victoria 8007 Australia
                    </p>
                    <button class="button -simple">GET DIRECTIONS</button>
                </div>
                <div class="sidebar__socials">
                    <div class="item">
                        <a data-barba href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="item">
                        <a data-barba href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="item">
                        <a data-barba href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="item">
                        <a data-barba href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </aside>
            <div class="content-wrapper  js-content-wrapper">