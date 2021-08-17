<!-- php header code  -->
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
              <h1 class="font-32 text-theme-colored heading-txt">About Us</h1>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="border-left-2px border-theme-colored mt-60 pl-15">
                
                <h2 style="font-family: 'David Libre', serif;" class="fw-bold text-theme-colored font-36 mt-0">About Us</h2>
              </div>
              <h4 style="font-family: 'David Libre', serif; font-weight:400;">Our Aims to design spaces with 'best designs' and want to become the country's most loved and top interior designing company,</h5>
              <p style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> providing solutions in the field of high-end corporate workplace, commercial and residential interiors, hospitality interiors, etc. Our design reflects the style, desires and personality of our clients that are sophisticated, subtle and elegant. </p>
			  <p style="font-family: 'David Libre', serif; font-weight:400;" class="text-black">We work passionately with our clients so as to achieve a lavish end result which they cherish for a lifetime. We like design to be visually powerful, intellectually elegant and above all timeless. 
We place absolute importance on understanding the particular needs and wishes of our clients and provide best interior designing services to them.</p>
			  
            </div>
            <div class="col-sm-6 col-md-6">
              <img class="img-fullwidth mt-5" alt="" src="images/photos/2.jpg">
            </div>
			
          </div>
		  <p  style="font-family: 'David Libre', serif; font-weight:400;"  class="text-black">We Provides All Architecture & Interior Designing Services, Interior Designers in Kolkata, Best Interior Designers in Kolkata & Interior Decorators in Kolkata, as a Best Architect in Kolkata, We Understand Our Client Requirements, In House Our Client Gets, Landscape Services, Import Around The World Facilities, Our Firm Work In Residential Interior, Commercial Interior, Hotel Interior, Depending On The Requirements And Budget Of Our Clients, We Offer Integrated Solutions That Address Our Clients Needs.</p>
        </div>
      </div>
    </section>





   
  </div>
  <!-- end main-content -->
  
  <!-- php header code  -->
    <?php include "footer.php"; ?>

    <script>
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