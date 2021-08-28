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
            <h1 class=" heading-txt">Faq's</h1>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="accordion1" class="panel-group accordion">
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span> <strong>Q. Q 1 What kind of paint do you use ?</strong></a> </div>
              <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                <div class="panel-content">
                  <p>We use the only professional quality paints from Asian Paints, Nerolac, Berger unless the customer requests a different brand </p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion12" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. Do You Charge for estimates ?</strong></a> </div>
              <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                <div class="panel-content">
                  <p>We never charge a fee to provide an estimate for your painting project.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. How long will it take to paint my house?</strong></a> </div>
              <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>The process can take as little as 4-5 days from the time we connect with you. However, the actual timeing will depend on the condition of your paint surfaces, the type of work required, our schedule and weather conditions if the project involves exterior work.</p>
                  <p>

                    During our consultation with you, we can evaluate your situation and let you know how long we think it will take to complete your painting project.</p>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. What is modular kitchen ?</strong></a> </div>
              <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>Modular Kitchen is a term used for the modern kitchen furniture layout consisting of modules of cabinets in different sizes which can facilitate the effective usage of the spaces in a kitchen. </p>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. What is the difference between carpenter made kitchen and modular kitchen? </strong></a> </div>
              <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>A carpenter fabricates everything manually at the client's site using hand tools. Modular kitchen is manufactured using sophisticated machines in factory and assembled at the site. </p>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion17" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. Can I clean the kitchen cabinets using water?</strong></a> </div>
              <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>Yes you can use damp cloth to clean the cabinets and shutters. Never clean by running water on to the cabinets. </p>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion18" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. What is the life of modular kitchen?</strong></a> </div>
              <div id="accordion18" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>Life of the kitchen is based on the quality of the material , hardware, construction quality and proper maintenance. </p>
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion19" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. Is the wall panel waterproof ?</strong></a> </div>
              <div id="accordion19" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>Yes, PVC Wall panels are made from PVC plastic and are completely waterproof. If the panels are to be used in a wet or humid environment, we always recommend using silicone sealant between the panel joints to avoid water getting behind the panels. </p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- divider: what makes us different -->
  <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="images/bg/footer.png">
    <div class="container">
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mt-0">Did not find your answer?</h3>
            <h2 class="text-black">Just Call <a class="text-decoration-none" href="tel:+919831037404"> +91 9831037404</a>  , <a class="text-decoration-none" href="tel:+9103340002678"> 033 4000 2678</a>  </h2>

          </div>
        </div>
      </div>
    </div>
  </section>




</div>
<!-- end main-content -->

<!-- php footer code  -->
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