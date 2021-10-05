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
            <h1 class=" heading-txt">GET QUOTE</h1>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="step1" id="pricing" class="working" data-bg-img="images/pattern/p4.png">
    <div class="container-fluid ">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- <h1 style="font-family: 'David Libre', serif; " class="fw-bold text-uppercase mt-0 ">Inform Us Your <span class="span myspan"> Requirments </span> </h1> -->

            <!-- <h4 style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> We are best Interior, Exterior design service provider in Pan India </h4> -->
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6">
            <div class="row">


              <div class="col-sm-6 mx-auto reworking px-4">
                <h4 class="fw-bold text-center mb-5">
                  Step - 1 of 2
                </h4>
                <form id="contact_form" name="contact_form" class="" action="mail_send.php" method="post">
                  <h4 class="mt-3">
                    New Work / <span class="myspan  rounded"> Rennovation</span>

                  </h4>

                  <select required name="work" class="form-select" aria-label="Default select example">
                    <option selected>New Work / Rennovation</option>
                    <option value="New Work">New Work</option>
                    <option value="Rennovation">Rennovation</option>

                  </select>
                  <h4 class="mt-3">
                    Property <span class="myspan  rounded"> Type</span>

                  </h4>

                  <select required name="working" class="form-select" aria-label="Default select example">
                    <option selected>WORKING/ REWORKING</option>
                    <option value="Residence">Residence</option>
                    <option value="Office">Office</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Showroom">Showroom</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Shop">Shop</option>
                  </select>
                  <h4 class="mt-3">
                    AREA OF <span class="myspan  rounded"> PROPERTY</span>
                  </h4>

                  <select required name="area" class="form-select" aria-label="Default select example">
                    <option selected>AREA</option>
                    <option value="Upto 500 Sqft">Upto 500 Sqft</option>
                    <option value="500 - 1000 Sqft">500 - 1000 Sqft</option>
                    <option value="1000 - 1500 Sqft"> 1000 - 1500 Sqft</option>
                    <option value="1500 - 2000 Sqft">1500 - 2000 Sqft</option>
                    <option value="2000 - 3000 Sqft"> 2000 - 3000 Sqft</option>
                    <option value="More than 3000 Sqft">More than 3000 Sqft</option>
                  </select>
                  <h4 class="mt-3">
                    YOUR <span class="myspan rounded"> BUDGET</span>

                  </h4>
                  <select required name="budget" class="form-select" aria-label="Default select example">
                    <option selected> BUDGET</option>
                    <option value="Upto 10 lakh">Upto 10 lakh</option>
                    <option value="10lakh - 20lakh">10lakh - 20lakh</option>
                    <option value="20lakh - 30lakh">20lakh - 30lakh</option>
                    <option value="30lakh - 40lakh">30lakh - 40lakh</option>
                    <option value="40lakh - 50lakh">40lakh - 50lakh</option>
                    <option value="More than 50lakh">More than 50lakh</option>
                  </select>

                  <button onclick="step()" class="btn btn-dark text-light mt-3">
                    Next
                  </button>
              </div>


            </div>
          </div>






          <div class="col-sm-6">
            <img class="ext-img" src="images/services/ext-design.jpg" alt="exterior-design">
            <h5 class="myspan text-center my-2">
              Think No More! Begin your space interiors journey with RG DZINE.
            </h5>
          </div>
        </div>
      </div>

    </div>
  </section>



  <section id="step2" id="pricing" class="working" data-bg-img="images/pattern/p4.png">
    <div class="container-fluid ">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <!-- <h1 style="font-family: 'David Libre', serif; " class="fw-bold text-uppercase mt-0 ">Inform Us Your <span class="span myspan"> Requirments </span> </h1> -->

            <!-- <h4 style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> We are best Interior, Exterior design service provider in Pan India </h4> -->
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row mb-3 step2-bar">
          <h2 class="bg-dark  text-center text-light py-2">
            Lets set up a Free online consultation for you
          </h2>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="row">

              <div class="col-sm-6 mx-auto reworking px-4">
                <h4 class="fw-bold text-center mb-5">
                  Step - 2
                </h4>
                <div class="form-group">
                  <label for="form_name"> Full Name <small>*</small></label>
                  <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                </div>
                <div class="form-group">
                  <label for="form_email">Email <small>*</small></label>
                  <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">

                </div>
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                  <label for="form_name">Message</label>
                  <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="form-group">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" name='mail_click' value="clicked" class="btn btn-default btn-dark btn-theme-colored btn-flat">Send your message</button>
                </div>
                </form>

                <div  style="border: 2px solid darkgoldenrod;">
                  <!-- <img class="img-fluid step2-img py-2 " src="images/logo.png" alt="logo"> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14743.302551667077!2d88.3988927!3d22.5107242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf384144785c3f9de!2sRG%20DZINE!5e0!3m2!1sen!2sin!4v1633007128244!5m2!1sen!2sin" width="200" height="300" allowfullscreen="" loading="lazy"></iframe>


                </div>
                <!-- <div class="step2-div mt-4">

                  <a target="_blank" href="https://www.facebook.com/RgDzine">
                    <i style="margin-left:4px;" class="fab fa-facebook-f h1 bg-dark step2-icon text-light px-3"></i>
                  </a>


                  <span>
                    <a target="_blank" href="https://www.instagram.com/rgdzine/">
                      <i class="fab fa-instagram h1 bg-dark step2-icon text-light "></i>
                    </a>

                  </span>

                </div> -->








              </div>

            </div>
          </div>






          <div class="col-sm-6">
            <img class="cover2  " src="images/services/cover2.jpg" alt="exterior-design">

          </div>
        </div>
      </div>

    </div>
  </section>









  <!-- GET A QUOTE SECTION END -->


  <!-- Divider: Contact -->
  <section id="contact" class="divider bg-lighter">
    <div class="container-fluid">
      <!-- <div class="col-md-5">

        Google Map HTML Codes
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.8256383109524!2d88.39670401532011!3d22.510724185214638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271c8da1e25d5%3A0xf384144785c3f9de!2z4KSw4KSXIOCknOCkvOCkv-CkqA!5e0!3m2!1shi!2sin!4v1628858391843!5m2!1shi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div> -->

      <!-- <div class="col-md-7">
        <h3 class="mt-0 mb-30">Interested in discussing?</h3>

        Contact Form

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
          <button type="submit" name='mail_click' value="clicked" class="btn btn-default btn-dark btn-theme-colored btn-flat">Send your message</button>
        </div>
        </form>
        Contact Form Validation


      </div> -->





      <div class="row bg-deep">
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center pt-60 pb-60 border-right">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h4>Call Us</h4>
            <h5 class="text-black">Phone: <a class="text-decoration-none" href="tel:+919831037404"> +91 9831037404</a> , <a class="text-decoration-none" href="tel:+9103340002678"> 033 4000 2678</a> </h5>

          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center  pt-60 pb-60 border-right">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h4>(Head Office)</h4>
            <h5 class="text-black">

              GE-138, RAJDANGA MAIN ROAD, SECTOR G,
              EAST KOLKATA TWP,<br> KOLKATA, WEST BENGAL 700107

            </h5>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center  pt-60 pb-60">
            <i class="fas fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h4>Email Id</h4>
            <h5 class="text-black"> <a class="text-decoration-none" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@rgdzine.com"> info@rgdzine.com</a> </h5>
          </div>
        </div>
      </div>
  </section>





  <!-- end main-content -->

  <!-- footer php code -->
  <?php include "footer.php"; ?>

  <script>
    // function working_select(data) {

    //   document.getElementById('working').value = data.innerText;
    //   document.getElementById('Residence').style = "";
    //   document.getElementById('Ofiice').style = "";
    //   document.getElementById('Hotel').style = "";
    //   document.getElementById('Showroom').style = "";
    //   document.getElementById('Restaurant').style = "";
    //   document.getElementById('Shop').style = "";

    //   document.getElementById(data.innerText).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";

    // }

    // function property_area(data) {
    //   document.getElementById('property').value = data.innerText;
    //   document.getElementById('upto500').style = "";
    //   document.getElementById('upto500_1000').style = "";
    //   document.getElementById('upto1000_1500').style = "";
    //   document.getElementById('upto1500_2000').style = "";
    //   document.getElementById('upto2000_300').style = "";
    //   document.getElementById('more3000').style = "";

    //   document.getElementById(data.id).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";


    // }

    // function budget(data) {
    //   document.getElementById('budget').value = data.innerText;
    //   document.getElementById('upto10').style = "";
    //   document.getElementById('upto50').style = "";
    //   document.getElementById('upto20').style = "";
    //   document.getElementById('upto30').style = "";
    //   document.getElementById('upto40').style = "";
    //   document.getElementById('more50').style = "";

    //   document.getElementById(data.id).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";


    // }


    function showlogo() {
      document.querySelector(".menuzord-menu").style.marginTop = -100 +
        "px";

      var mq = window.matchMedia("(max-width: 570px)");
      if (mq.matches) {
        document.querySelector(".pot1").style.display = "block";
        document.querySelector(".pot2").style.display = "none";
      } else {
        // window width is greater than 570px
        if (scrollY > 64) {
          // alert("hello");
          document.querySelector(".pot1").style.display = "block";
          document.querySelector(".pot2").style.display = "none";

        } else {
          document.querySelector(".pot1").style.display = "none";
          document.querySelector(".pot2").style.display = "block";


        }
      }

    }

    setInterval(showlogo, 100);

    document.getElementById("step2").style.display = "none";


    function step() {
      document.getElementById("step1").style.display = "none";
      document.getElementById("step2").style.display = "block";


    }
  </script>