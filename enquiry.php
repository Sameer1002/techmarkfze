<?php include 'header2.php';?>
<style> 

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
    .mt-30{
        margin-top: 30px;
    }
    .pt-m{
        padding-top: 1.875rem !important;
    }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
   

    <section class="bg-white mt-banner">
  <img src="img/enquiry/052.jpg" width="100%" style="max-width:100%;" alt="Banner image">
</section>

    <section class="bg-grey">
        <div class="container">      
            <div class="row no-gutters" data-anim="slide-right">
                <div class="col-xl-12 col-lg-12">
                    <div class="col-xl-12 col-lg-12">
                        <div class="sectionHeading -left-line py-48 px-48 md:py-20 md:px-20" id="message">
                          
                            <center><h2 class="sectionHeading__title text-black">Become a Partner</h2>
                            <p class="text-black"> Please Fill Out The Partnership Enquiry Form</p>
                            </center>

                            <form id="contact" action="mail-v1.php" method="post">
      <fieldset>
        <input placeholder="Full Name *" name="name" type="text" tabindex="1" class="pt-m" data-required required>
      </fieldset>

      <fieldset>
        <input placeholder="Email *" name="email" type="email" tabindex="2" class="pt-m" data-required required>
      </fieldset>
      
      <fieldset>
        <input placeholder="Mobile *" type="text" name="phone" tabindex="2" class="pt-m" data-required required>
      </fieldset>

      <fieldset>
        <input placeholder="Company Name *" type="text" name="subject" tabindex="4" class="pt-m" data-required required>
      </fieldset>
      
      <fieldset>
        <input placeholder="Current Bussiness Sector *" type="text" name="c_business_sector" tabindex="2" class="pt-m" data-required required>
      </fieldset>

      <fieldset>
        <input placeholder="Current Products *" type="text" name="current_products" tabindex="2" class="pt-m" data-required required>
      </fieldset>

      <fieldset>
        <input placeholder="Website *" type="text" name="website" tabindex="2" class="pt-m" data-required required>
      </fieldset>

      <fieldset>
        <textarea placeholder="Message *" name="message" tabindex="5" class="pt-m" data-required required></textarea>
      </fieldset>

      <fieldset>
        <center><button type="submit" name="send" id="contact-submit" class="button -md -accent text-white mt-30">Submit Now</button></center>
      </fieldset>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="component/jquery/jquery-3.2.1.min.js"></script>
   
<?php include'footer.php';?>