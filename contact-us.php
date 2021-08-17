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
            <h1 class="font-32 text-theme-colored heading-txt">Contact Us</h1>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GET A QUOTE SECTION START -->
  <section class="working">

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">
            I NEED WORKING/ REWORKING ON MY
          </h1>
        </div>
        <div class="row my-5">
          <div id='Residence' class="col-sm-3 mx-auto" onclick="working_select(Residence)">
            <h2 class="text-center"> <a href="#">Residence</a> </h2>
          </div>
          <div id="Ofiice" class="col-sm-3 mx-auto" onclick="working_select(Ofiice)">
            <h2 class="text-center"> <a href="#">Ofiice</a></h2>
          </div>
          <div style="border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" id="Hotel" class="col-sm-3 mx-auto" onclick="working_select(Hotel)">
            <h2 class="text-center"> <a href="#">Hotel</a></h2>
          </div>

        </div>
        <div class="row ">
          <div class="col-sm-3 mx-auto" id='Showroom' onclick="working_select(Showroom)">
            <h2 class="text-center"> <a href="#">Showroom</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id='Restaurant' onclick="working_select(Restaurant)">
            <h2 class="text-center"> <a href="#">Restaurant</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id='Shop' onclick="working_select(Shop)">
            <h2 class="text-center"> <a href="#">Shop</a></h2>
          </div>

        </div>

      </div>
    </div>

  </section>

  <section class="working">

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">
            THE AREA OF MY PROPERTY IS
          </h1>
        </div>
        <div class="row my-5">
          <div class="col-sm-3 mx-auto">
            <h2 class="text-center"><a href="budget" id='upto500' onclick="property_area(x)">Upto 500 Sqft</a> </h2>
          </div>
          <div style="  border-radius: 30px; 
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" id='upto500_1000' onclick="property_area(upto500_1000)" class="col-sm-3 mx-auto">
            <h2 class="text-center"> <a href="budget">500 - 1000 Sqft</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id='upto1000_1500' onclick="property_area(upto1000_1500)">
            <h2 class="text-center"> <a href="budget"> 1000 - 1500 Sqft</a></h2>
          </div>

        </div>
        <div class="row ">
          <div class="col-sm-3 mx-auto" id='upto1500_2000' onclick="property_area(upto1500_2000)">
            <h2 class="text-center"> <a href="budget">1500 - 2000 Sqft</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id='upto2000_300' onclick="property_area(upto2000_300)">
            <h2 class="text-center"> <a href="budget">2000 - 3000 Sqft</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id='more3000' onclick="property_area(more3000)">
            <h2 class="text-center"> <a href="budget">More than 3000 Sqft</a></h2>
          </div>

        </div>

      </div>
    </div>

  </section>

  <section class="working">

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">
            MY SUITABLE BUDGET IS

          </h1>
        </div>
        <div id="budget" class="row my-5">
          <div style="  border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="col-sm-3 mx-auto" id="upto10" onclick="budget(upto10)">
            <h2 class="text-center"> <a href="#">Upto 10 lakh</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id="upto20" onclick="budget(upto20)">
            <h2 class="text-center"> <a href="#"> 10lakh - 20lakh</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id="upto30" onclick="budget(upto30)">
            <h2 class="text-center"> <a href="#">20lakh - 30lakh</a></h2>
          </div>

        </div>
        <div class="row ">
          <div class="col-sm-3 mx-auto" id="upto40" onclick="budget(upto40)">
            <h2 class="text-center"> <a href="#">30lakh - 40lakh</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id="upto50" onclick="budget(upto50)">
            <h2 class="text-center"> <a href="#">40lakh - 50lakh</a></h2>
          </div>
          <div class="col-sm-3 mx-auto" id="more50" onclick="budget(more50)">
            <h2 class="text-center"> <a href="#">More than 50lakh</a></h2>
          </div>

        </div>

      </div>
    </div>

  </section>




  <!-- GET A QUOTE SECTION END -->


  <!-- Divider: Contact -->
  <section id="contact" class="divider bg-lighter">
    <div class="container">
      <div class="col-md-5">

        <!-- Google Map HTML Codes -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.8256383109524!2d88.39670401532011!3d22.510724185214638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271c8da1e25d5%3A0xf384144785c3f9de!2z4KSw4KSXIOCknOCkvOCkv-CkqA!5e0!3m2!1shi!2sin!4v1628858391843!5m2!1shi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>

      <div class="col-md-7">
        <h3 class="mt-0 mb-30">Interested in discussing?</h3>

        <!-- Contact Form -->
        <form id="contact_form" name="contact_form" class="" action="mail_send.php" method="post">
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
                <input id="working" name="working" class="form-control required email" type="hidden" value="Hotel">
                <input id="property" name="property" class="form-control required email" type="hidden" value="500 - 1000 Sqft">
                <input id="budget" name="budget" class="form-control required email" type="hidden" value="Upto 10 lakh">
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
        <!-- Contact Form Validation-->


      </div>

      <div class="row pt-30 bg-deep">
     
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
    </div>
  </section>




</div>
<!-- end main-content -->

<!-- footer php code -->
<?php include "footer.php"; ?>

<script>
  function working_select(data) {

    document.getElementById('working').value = data.innerText;
    document.getElementById('Residence').style = "";
    document.getElementById('Ofiice').style = "";
    document.getElementById('Hotel').style = "";
    document.getElementById('Showroom').style = "";
    document.getElementById('Restaurant').style = "";
    document.getElementById('Shop').style = "";

    document.getElementById(data.innerText).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";

  }

  function property_area(data) {
    document.getElementById('property').value = data.innerText;
    document.getElementById('upto500').style = "";
    document.getElementById('upto500_1000').style = "";
    document.getElementById('upto1000_1500').style = "";
    document.getElementById('upto1500_2000').style = "";
    document.getElementById('upto2000_300').style = "";
    document.getElementById('more3000').style = "";

    document.getElementById(data.id).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";


  }

  function budget(data) {
    document.getElementById('budget').value = data.innerText;
    document.getElementById('upto10').style = "";
    document.getElementById('upto50').style = "";
    document.getElementById('upto20').style = "";
    document.getElementById('upto30').style = "";
    document.getElementById('upto40').style = "";
    document.getElementById('more50').style = "";

    document.getElementById(data.id).style = "border-radius: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;";


  }


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
</script>