<!-- header php code -->
<?php include "header.php"; ?>

<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header parallax layer-overlay" data-bg-img="images/bg/bg5.jpg">
      <div class="container pt-140 pb-50">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-12 xs-text-center">
              <h1 class="font-32 text-theme-colored">Contact Us</h1>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section id="contact" class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
		<div class="row mb-60 bg-deep">
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center pt-60 pb-60 border-right">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Call Us</h4>
              <h5 class="text-black">Phone: +91 9155532679, 9155532679 </h5>
			  
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60 border-right">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>(Head Office)</h4>
              <h5 class="text-black">Outer Ring Road Banglore, Karnatka</h5>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60">
              <i class="fa fa-envelope-o font-36 mb-10 text-theme-colored"></i>
              <h4>Email Id</h4>
              <h5 class="text-black">contact@alphaworldtech.com </h5>
            </div>
          </div>
        </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
          <iframe src="https://www.google.com/embed?pb=!1m18!1m12!1m3!1d3501.530730210848!2d77.37044921464454!3d28.64382338241336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb8ecc90b2a3%3A0x25483ec4bbc85cba!2sUrban+India+Design!5e0!3m2!1sen!2sin!4v1532683022109" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					

          </div>

          <div class="col-md-7">
            <h3 class="mt-0 mb-30">Interested in discussing?</h3>
            
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="quickmail.php" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name"> Full Name <small>*</small></label>
                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat">Send your message</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            

          </div>
        </div>
      </div>
    </section>



   
  </div>
  <!-- end main-content -->

  <!-- footer php code -->
<?php include "footer.php"; ?>