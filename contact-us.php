<?php include 'header2.php'; ?>
<title>Techmark - Connect with Techmark | Contact Us for Inquiries and Location Details.</title>
  <meta name="keywords" content="Techmark, Contact Techmark, Contact Number of Techmark, Location of Techmark, Email of Techmark, Mobile number of Techmark, Details of Techmark, Addreess of Techmark, Mobile Number of Techmark, Contact Details of Techmark, Water heater, Air Conditioner, Heat Pump, LED Lamp, Water Dispenser, Deep Freezer, Dubai, Italy, Turkey, European standards">
  <meta name="description"
    content="Get in touch with us easily! Our contact page has all the information you need – address, email, and contact numbers. Connect with us for a smooth interaction.">
<style>
    #message {
        padding: 15px 40px 30px 18px;
    }

    #mail-status {
        padding: 12px 20px;
        width: 100%;
        display: none;
        font-size: 1em;
        color: rgb(40, 40, 40);
    }

    .error {
        background-color: #F7902D;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .success {
        background-color: #48e0a4;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .g-recaptcha {
        margin: 0 0 25px 0;
    }

    .mt-30 {
        margin-top: 30px;
    }

    .pt-m {
        padding-top: 1.875rem !important;
    }
</style>

<section class="bg-white mt-banner">
    <img src="img/contact/contact-us-white-final.jpg" width="100%" class="mobile_none" style="max-width:100%;"
        alt="Banner image">
    <img src="img/contact/contact-us-mob.jpg" width="100%" class="desk_none" style="max-width:100%;" alt="Banner image">
</section>

<section class="layout-pt-md bg-grey pb-lg-2">
    <div data-anim-wrap class="container" data-anim="slide-right">
        <div class="row justify-content-center text-center">
            <div class="col-xl-7 col-lg-9">
                <div data-anim-child="slide-up" class="sectionHeading -lg">
                    <!-- <h2 class="sectionHeading__title">
                   Contact Us
                    </h2>-->
                </div>
            </div>
        </div>
        <!-- row start -->
        <div class="row x-gap-40 y-gap-40" data-anim="slide-right">
            <div class="col-lg-4 col-md-6 ">
                <div data-anim-child="slide-up delay-2" class="priceCard py-60 px-48 border-dark bg-white">
                    <div class="priceCard__content">
                        <div class="priceCard__badge">
                            Contact No
                        </div>
                        <div class="featured-title">
                            <center>
                                <a href="tel:7756098607">+97 1557867175</a>
                                <br>
                                <!--   <a href="tel:9420658366">+91 9822842265</a>-->
                                <br><br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div data-anim-child="slide-up delay-3" class="priceCard py-60 px-48 border-dark bg-white">
                    <div class="priceCard__content">
                        <div class="priceCard__badge">
                            E-Mail
                        </div>
                        <center>
                            <a href="mailto:info@techmarkfze.com">info@techmarkfze.com</a>
                            <br>
                            <a href="mailto:vab@techmarkfze.com"> vab@techmarkfze.com</a>
                            <br><br>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div data-anim-child="slide-up delay-4" class="priceCard py-60 px-48 border-dark bg-white">
                    <div class="priceCard__content">
                        <div class="priceCard__badge">
                            location
                        </div>
                        <center>
                            <p class="">
                                Techmark International FZE FZ JOAB0702, 7th floor, Jafza One, Jebel Ali Free Zone,
                                Dubai, P.O. Box No. 261485. UAE
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-beige-dark mt-0 pb-sm-2">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-8 col-md-6">
                <div class="cta">
                    <h4 class="cta__title text-white mt-20">
                        Become a Partner
                    </h4>
                    <p class="cta__text text-white col-xl-9  px-0 mb-20">
                        Please Fill Out The Partnership Enquiry Form
                    </p>
                </div>
            </div>
            <div class="col-auto">
                <div>
                    <a href="enquiry.php" class="button -md -white">Enquiry</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-grey">
    <div class="container">
        <div class="row no-gutters" data-anim="slide-right">
            <div class="col-xl-12 col-lg-12">
                <div class="sectionHeading -left-line py-48 px-48 md:py-20 md:px-20" id="message">
                    <center>
                        <h2 class="sectionHeading__title text-black pb-sm-2">General Inquiry or Feedback</h2>
                        <p class="text-black mb-sm-tn">Please fill out the form below and our team will get in touch
                            with
                            you!</p>
                    </center>
                    <form id="contact" action="mail.php" method="post">
                        <fieldset>
                            <input type="text" placeholder="Full Name *" name="name" tabindex="1" class="pt-m"
                                data-required required>
                        </fieldset>
                        <fieldset>
                            <input type="email" placeholder="Email *" name="email" tabindex="2" class="pt-m"
                                data-required required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Subject *" name="subject" tabindex="4" class="pt-m"
                                data-required required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Mobile *" name="phone" tabindex="2" class="pt-m"
                                data-required required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Message *" name="message" tabindex="5" class="pt-m" data-required
                                required></textarea>
                        </fieldset>
                        <fieldset>
                            <center><button type="submit" name="send" id="contact-submit"
                                class="button -md -accent text-white mt-30">Submit Now</button></center>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="component/jquery/jquery-3.2.1.min.js"></script>

<?php include 'footer.php'; ?>