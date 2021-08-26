<!-- php header code here -->
<?php include "header.php"; ?>

<!-- pop up code sagar  -->

<section style="display: none;" class="pop-up">
  <div id="popup" class="container-fluid ">
    <div id="popup2" class="container">
      <div class="row">
        <div class="modal-header">
          <button type="button  mx-5" class="btn-close" onclick="closepopup();"></button>
        </div>
        <div class="col-sm-12 my-2">
          <img class="img-fluid pop-up-img" src="images/banner/popup.png" alt="pop-up img">
        </div>

      </div>
    </div>
  </div>
</section>

<div class="container-fluid book-consult">
  <div class="row">

    <div class="col-sm-4">

    </div>

    <div class="col-sm-4 bookc">


      <button class=" btn  ">
        <a class="text-white text-decoration-none" href="contact-us.php"> BOOK FREE ONLINE CONSULTATION</a>
      </button>




    </div>
    <div class="col-sm-4">

    </div>

  </div>
</div>




<!-- pop up code end sagar  -->


<!-- Start main-content hello world  -->
<div class="main-content">
  <!-- Section: home -->
  <!-- Section: home -->

  <!-- social media section start sagar -->
  <section class=" s">
    <div class="my-social-media">
      <nav>
        <ul>
          <li>
            <a target="_blank" href="https://www.facebook.com/RgDzine">
              <i style="margin-left:4px;" class="fab fa-facebook-f"></i> <span> Facebook</span>
            </a>
          </li>

          <li>
            <a target="_blank" href="https://www.instagram.com/rgdzine/">
              <i style="font-size:30px; margin-top:-3px; margin-left:-2px;" class="fab fa-instagram"></i> <span> Instagram</span>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.youtube.com/channel/UCAoWc4guD2tZ0Y1L_fxUjAg/featured">
              <i style="margin-left:-2px" class="fab fa-youtube"></i> <span> Youtube</span>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://wa.me/+919831037404">
              <i style="font-size:30px; margin-top:-4px; margin-left:-2px;" class="fab fa-whatsapp"></i> <span> WhatsApp</span>
            </a>
          </li>

        </ul>
      </nav>

    </div>
  </section>

  <!-- social media section end sagar -->

  <!-- 
  <section id="home" class="divider fullscreen" data-bg-img="images/bg/bg7.jpg">
    <div class="maximage-slider">
      <div id="maximage">
        <img src="images/bg/bg1.jpg" class="img-fluid" alt="bg1" />
        <img src="images/bg/bg2.jpg" class="img-fluid" alt="bg2" />
        <img src="images/bg/bg3.jpg" class="img-fluid" alt="bg3" />
        <img src="images/bg/bg4.jpg" class="img-fluid" alt="bg4" />
        <img src="images/bg/bg5.jpg" class="img-fluid" alt="bg5" />
      </div>
      <div class="fullscreen-controls"> <a class="img-prev"><i class="pe-7s-angle-left"></i></a> <a class="img-next"><i class="pe-7s-angle-right"></i></a> </div>
    </div>
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <div class="pb-4 pt-4">
                <h3 id="hero" style="font-family: 'David Libre', serif;" class=" fw-bold banner_text text-uppercase text-white  font-30 inline-block pl-30 pr-30 mb-5 py-3 border-bottom border-white rounded">BEST EXTERIOR <span style="color: yellow;">&</span> INTERIOR FIRM <br>
                  <span style="color: yellow;">IN KOLKATA</span>
                </h3> <br>
                <h1 style="font-family: 'David Libre', serif;" class="text-uppercase text-white mt-0 inline-block fs-1 pl-4 pr-4 pt-5  border-bottom border-light border-2 pb-4 font-58 rounded">BEST EXTERIOR<span style="color:yellow;"> &</span> INTERIOR FIRM <br><span style="color:yellow;">IN KOLKATA</span></h1>
                <p class="font-16 text-white">We specializing in exclusive, cost-effective and luxurious interior design, detailing and space planning in kolkata. </p>
                <a href="interior-designing.php">

                  <img src="images/arrow/arrow1.png" class="banner_png img-fluid" alt="">

                </a>

                bg-theme-colored-transparent
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
</section> -->

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/bg/bg1.jpg" class="d-block w-100 slide-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/bg/bg2.jpg" class="d-block w-100 slide-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/bg/bg3.jpg" class="d-block w-100 slide-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/bg/bg4.jpg" class="d-block w-100 slide-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/bg/bg5.jpg" class="d-block w-100 slide-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button onclick="runslide();" id="slidenextbutton" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Section: About us -->
  <section>
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 style="font-family: 'David Libre', serif;" class="text-uppercase fw-bold mt-0">Who <span class="myspan">we are</span> </h2>
            <div class="title-icon">
              <img class="mb-10" src="images/title-icon2.png" alt="title">
            </div>
            <h4 style="font-family: 'David Libre', serif; font-weight:400;"> We specializing in exclusive, cost-effective and luxurious interior design, detailing, and space planning in India. </h4>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">

          <div data-aos="fade-right" style="overflow-x: hidden;" class="col-sm-6 col-md-6">
            <img class="img-fullwidth" alt="about" src="images/about/about1.jpg">
          </div>
          <div data-aos="fade-left" class="col-md-6">


            <h2 style="font-family: 'David Libre', serif;" class="text-theme-colored fw-bold font-30 mt-0 ">Welcome To <span class="myspan">RG DZINE</span> </h2>

            <p style="font-family: 'David Libre', serif; font-weight:400;" class="text-black">RG DZINE is the best exterior and interior
              designing firm in Kolkata. We also
              provide services in other parts of West
              Bengal ( Durgapur, Howrah, Prulia, etc.),
              Bihar, Uttar Pradesh, and Delhi.</p>
            <p style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> <span class="fw-bold h4">RG DZINE</span>
              Wants to positively influence the lives of all clients with whom we have the delight of working and left a good impression on their needs and imagination. </p>

            <p style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"><span class="fw-bold h4">RG DZINE</span> offers clients the lowest possible prices, best available choices, and supreme convenience. Our best design must inspire and uplift the hearts and minds of all those who lay eyes on them. Our long term goal is to create a better every day life for many people.</p>
            <a style="font-family: 'David Libre', serif; font-weight:400;" class="btn btn-default btn-lg mt-10" href="about-us.php">Read more</a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- BANNER SECTION -->
  <section>
    <div class=" banner-section mb-5">


      <div class="container">
        <div class="row banner-middle">
          <div class="col-sm-3">

          </div>
          <div class="col-sm-2">
            <!-- <img src="images/banner/LOGO2.png" class="img-fluid" alt=""> -->
            <div class="row icon-row border rounded my-2">
              <div class=" col-sm-4 mb-1">
              <i class="rounded-icon far fa-shield-check text-light h3  my-2 mx-3"></i>
              </div>
             
              <div class="col-sm-8 my-1">

                <span class="fw-bold h5 myspan">
                  RG DZINE
                </span>
                
               <p>
               GUARANTEE
               </p>
              

              </div>
            </div>
          </div>

          <div class="col-sm-1">
            <h5>
              On-time
            </h5>
            <p>
              delivery
            </p>
          </div>
          <div class="col-sm-1">
            <h5>
              Best
            </h5>
            <p>
              Price
            </p>
          </div>
          <div class="col-sm-1">
            <h5>
              Superior
            </h5>
            <p>
              quality
            </p>
          </div>
          <div class="col-sm-1">
            <h5>
              Safety
            </h5>
            <p>
              assured

            </p>
          </div>
        </div>
      </div>



    </div>

  </section>



  <!-- Section: Pricing -->
  <section id="pricing" class="service-bg" data-bg-img="images/pattern/p4.png">
    <div class="container ">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 style="font-family: 'David Libre', serif; " class="fw-bold text-uppercase mt-0 myspan">Services</h1>
            <div class="title-icon">
              <img class="" src="images/title-icon2.png" alt="title">
            </div>
            <h4 style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> We are best Interior, Exterior design service provider in Delhi NCR </h4>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div data-aos="fade-right" class="col-xs-12 col-sm-4 col-md-3 hvr-float-shadow mb-sm-30">
            <div class="pricing-table style1 bg-white-light border-10px text-center">
              <div class=" pb-30">
                <img class="img-fullwidth" alt="Office Design" src="images/about/about1.jpg">
                <h3 style="font-family: 'David Libre', serif; " class="fw-bold mt-2 text-theme-colored">Office Design</h3>
                <p style="font-family: 'David Libre', serif; ">We specialises in creating workplaces that are in line with your organisation culture and environment. </p>


                <a class="btn btn-colored btn-default btn-theme-colored text-uppercase" href="office-design.php">Read More</a><br>
              </div>
            </div>
          </div>
          <div data-aos="zoom-in-up" class="col-xs-12 col-sm-4 col-md-3 hvr-float-shadow mb-sm-30">
            <div class="pricing-table style1 bg-white-light border-10px text-center">
              <div class=" pb-30">
                <img class="img-fullwidth" alt="Interior Design" src="images/about/about2.jpg">
                <h3 style="font-family: 'David Libre', serif; " class="fw-bold mt-2 text-theme-colored">Interior Design</h3>
                <p style="font-family: 'David Libre', serif; ">We specialises in creating workplaces that are in line with your organisation culture and environment. </p>


                <a class="btn btn-colored btn-default btn-theme-colored text-uppercase" href="interior-designing.php">Read More</a><br>
              </div>
            </div>
          </div>
          <div data-aos="zoom-in-down" class="col-xs-12 col-sm-4 col-md-3 hvr-float-shadow mb-sm-30">
            <div class="pricing-table style1 bg-white-light border-10px text-center">
              <div class=" pb-30">
                <img class="img-fullwidth" alt="Exterior Design" src="images/about/about3.jpg">
                <h3 style="font-family: 'David Libre', serif; " class="mt-2 fw-bold text-theme-colored">Exterior Design</h3>
                <p style="font-family: 'David Libre', serif; ">We specialises in creating workplaces that are in line with your organisation culture and environment. </p>


                <a class="btn btn-colored btn-default btn-theme-colored text-uppercase" href="exterior-designing.php">Read More</a><br>
              </div>
            </div>
          </div>
          <div data-aos="fade-left" class="col-xs-12 col-sm-4 col-md-3 hvr-float-shadow mb-sm-30">
            <div class="pricing-table style1 bg-white-light border-10px text-center">
              <div class=" pb-30">
                <img class="img-fullwidth" alt="Modular Kitchen" src="images/about/about4.jpg">
                <h3 style="font-family: 'David Libre', serif; " class="mt-2 fw-bold text-theme-colored">Modular Kitchen</h3>
                <p style="font-family: 'David Libre', serif; ">We specialises in creating workplaces that are in line with your organisation culture and environment. </p>


                <a class="btn btn-colored btn-default btn-theme-colored text-uppercase" href="modular-kitchen.php">Read More</a><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- bootstarp modal pop up banner  -->

  <!-- bootstrap modal pop up banner end  -->

  <!-- PRoject Number animation start  -->

  <!-- <section data-aos="flip-down">
    <div class="container-fluid  my-5">
      <div class="row projectcover ">
        <div class="col-sm-3 col-md-3 col-lg-3 projetcomplete my-3 border-right ">

          <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "> <span><i class="fas fa-rocket px-3 "></i></span> Project Complete </h2>
          <h1 class="text text-center mt-3"> <span id="projectcomplete"> </span> + </h1>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 border-right  my-3">
          <h2 class="text text-center fw-bold mt-5" style="font-family: 'David Libre', serif; "><span class="text-light "><i class="far fa-smile-beam px-3"></i></span>Happy Customer </h2>
          <h1 class="text text-center mt-3"> <span id="happycustmor"></span> + </h1>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 border-right  my-3">
          <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "> <span><i class="fad fa-user-hard-hat px-3"></i></span> Exprencied Staff</h2>
          <h1 class="text text-center mt-3"> <span id="staff"></span> + </h1>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3  my-3">
          <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "><span><i class="fas fa-home-lg px-3"></i></span> Ongoing Project</h2>
          <h1 class="text text-center mt-3"> <span id="ongoingproject"> </span> + </h1>
        </div>

      </div>
    </div>
  </section> -->

  <!-- Project Complete Section  -->

  <section class="project-complete">

    <div style="background-color: rgba(0, 0, 0, 0.58); background-position: center center; background-repeat: no-repeat; background-blend-mode: multiply; padding: 0px 30px; border-top: 0px solid rgb(234, 233, 233); border-bottom: 0px solid rgb(234, 233, 233); border-right-color: rgb(234, 233, 233); border-left-color: rgb(234, 233, 233); background-size: cover; position: relative; overflow: hidden; z-index: 1; background-image: none;" data-bg="images/project/img.jpg">
      <div class="parallax-inner lazyloaded" data-bg="images/project/img.jpg" style=" width:3556px; margin-left:9%;   background-image: url('images/project/img.jpg'); pointer-events: none; width: 100%; height: 100%; overflow:hidden; position: absolute; z-index: -1; top: 0px; left: 0px; opacity: 1; background-repeat: no-repeat; background-size: cover; background-color: rgba(0, 0, 0, 0.58); background-blend-mode: multiply; background-image: url(&quot;images/project/img.jpg&quot;); min-height: 800px; transform: translate3d(-151.683px, -2px, 0px);"></div>
      <div class="fusion-builder-row fusion-row ">
        <div style="margin-top:0px;margin-bottom:0px;">
          <div style="padding: 0px; background-position: left top; background-repeat: no-repeat; background-size: cover; height: auto;" data-bg-url="">
            <div style="padding:0;margin-left:calc( (100vw - 100% ) / -2 );margin-right:calc( (100vw - 100% ) / -2  );"><svg class="fusion-big-half-circle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#ffffff;padding:0;">
                <path d="M0 0 C55 180 100 0 100 0 Z"></path>
              </svg></div>
            <div class="fusion-clearfix"></div>

          </div>
        </div>
        <div class="" style="margin-top:100px;margin-bottom:55px;">
          <div class="fusion-column-wrapper row" style="padding: 0px; background-position: left top; background-repeat: no-repeat; background-size: cover; height: auto;" data-bg-url="">


            <div class="container-fluid  my-5">
              <div class="row projectcover ">
                <div class="col-sm-3 col-md-3 col-lg-3 projetcomplete my-3 border-right ">

                  <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "> <span><i class="fas fa-rocket px-3 "></i></span> Project Complete </h2>
                  <h1 class="text text-center mt-3"> <span id="projectcomplete"> </span> + </h1>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 border-right  my-3">
                  <h2 class="text text-center fw-bold mt-5" style="font-family: 'David Libre', serif; "><span class="text-light "><i class="far fa-smile-beam px-3"></i></span>Happy Customer </h2>
                  <h1 class="text text-center mt-3"> <span id="happycustmor"></span> + </h1>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 border-right  my-3">
                  <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "> <span><i class="fad fa-user-hard-hat px-3"></i></span> Exprencied Staff</h2>
                  <h1 class="text text-center mt-3"> <span id="staff"></span> + </h1>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3  my-3">
                  <h2 class="text text-center mt-5 fw-bold" style="font-family: 'David Libre', serif; "><span><i class="fas fa-home-lg px-3"></i></span> Ongoing Project</h2>
                  <h1 class="text text-center mt-3"> <span id="ongoingproject"> </span> + </h1>
                </div>

              </div>
            </div>



          </div>
        </div>
        <div style="margin-top:0px;margin-bottom:0px;">
          <div style="background-color: rgba(109, 109, 109, 0); padding: 0px; background-position: left top; background-repeat: no-repeat; background-size: cover; height: auto;" data-bg-url="">
            <div style="padding:0;margin-left:calc( (100vw - 100% ) / -2 );margin-right:calc( (100vw - 100% ) / -2  );"><svg class="fusion-big-half-circle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#ffffff;padding:0;">
                <path d="M0 100 C40 0 60 0 100 100 Z"></path>
              </svg></div>
            <div class="fusion-clearfix"></div>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- PRoject Number animation End -->





  <!-- Gallery Grid 3 -->
  <section data-aos="flip-up">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Filter -->
            <div class="portfolio-filter">
              <a style="font-family: 'David Libre', serif; " href="#" class="" data-filter="*">All</a>
              <a style="font-family: 'David Libre', serif; " href="#photography" class="" data-filter=".photography">Modular Kitchen</a>
              <a style="font-family: 'David Libre', serif; " href="#interior" class="" data-filter=".interior">Interior Design</a>
              <a style="font-family: 'David Libre', serif; " href="#exterior" class="" data-filter=".exterior">Exterior Designn</a>
              <a style="font-family: 'David Libre', serif; " href="#design" class="" data-filter=".design">Office Design</a>
            </div>
            <!-- End Portfolio Filter -->

            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
              <!-- Portfolio Item Start -->
              <div class="gallery-item photography">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Modular Kitchen</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item branding photography">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/2.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Modular Kitchen</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item photography">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/3.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Modular Kitchen</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item interior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Interior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item interior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Interior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item interior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Interior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item exterior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Exterior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item exterior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/8.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Exterior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item exterior">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/9.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Exterior Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/9.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item design">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/11.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Office Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/11.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item design">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/12.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Office Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/12.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item design">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/gallery/13.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Office Design</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="images/gallery/13.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->


            </div>
            <!-- End Portfolio Gallery Grid -->

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-clients">
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 style="font-family: 'David Libre', serif; " class="fw-bold text-uppercase mt-0">OUR <span class="myspan">CLIENTS</span></h1>
            <div class="title-icon">
              <img class="title" src="images/title-icon2.png" alt="title">
            </div>
            <!-- <h4 style="font-family: 'David Libre', serif; font-weight:400;" class="text-black"> We are best Interior, Exterior design service provider in Delhi NCR </h4> -->
          </div>
        </div>
      </div>
      <div class="row ">



        <div class="owl-carousel owl-theme">
          <div class="item">

            <img src="images/client/client3.png" class="img-fluid mx-5 px-2  img " alt="">
          </div>
          <div class="item">
            <img src="images/client/client4.png" class="img-fluid mx-5 px-2  img" alt="">
          </div>
          <div class="item">
            <img src="images/client/client5.png" class="img-fluid mx-5 px-2  img" alt="">
          </div>

          <div class="item">
            <img src="images/client/client6.png" class="img-fluid mx-5 px-2  img" alt="">
          </div>

          <div class="item">
            <img src="images/client/client7.png" class="img-fluid mx-5 px-2  img" alt="">
          </div>

          <div class="item">
            <img src="images/client/client8.png" class="img-fluid mx-5 px-2  img" alt="">
          </div>


        </div>










      </div>
    </div>
  </section>

  <!-- Section: Testimonials -->
  <section class="divider layer-overlay overlay-theme-colored-9" data-stellar-background-ratio="0.5" data-bg-img="images/bg/footer.png">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial style1 testimonial-carousel-3col owl-nav-top mt-50">
            <div class="item">

              <div class="comment">
                <img class="img-circle" alt="Mr. Manoj Aggarwal" src="images/testimonials/s1.jpg">
                <h4 class="text-theme-colored">Mr. Manoj Aggarwal</h4>
                <p>Urban India Designs recently executed our new home and I must say they have done an excellent job. Initially we had roped them in only for Design Consultation but looking at the professionalism and quality of output decided to handover the execution also to them. We had a constraint in terms of the timeline but their team did a pretty good job of completing the project within timeline.
                </p>
              </div>

            </div>
            <div class="item">

              <div class="comment">
                <img class="img-circle" alt="Mrs Shilpa" src="images/testimonials/s2.jpg">
                <h4 class="text-theme-colored">Mrs Shilpa</h4>
                <p>Their service is fine and my overall experience has been good with these guys. Although a delay of 1-2 day happened on my project , but i think that happens to anybody as redesign is a tedious job. They are genuine and affordable i got 6 quotations but their quote was the cheapest and i am totally satisfied with their work and would recommend them to others as well.

                </p>
              </div>

            </div>
            <div class="item">

              <div class="comment">
                <img class="img-circle" alt="Mr. Gagan Khurana" src="images/testimonials/s3.jpg">
                <h4 class="text-theme-colored">Mr. Gagan Khurana</h4>
                <p>I had initially hired them to design my office and was very happy with their work . Looking at the quality i also gave them the contract for my house &#8211; My wife and children are very happy with the final makeover &#8211; The people visiting us get amazed with the our home interior &#8211; I would give my full recommendation to Urban India Design&#8230;great work!

                </p>
              </div>

            </div>

            <div class="item">

              <div class="comment">
                <img class="img-circle" alt="Mr. Shubahm jain" src="images/testimonials/s4.jpg">
                <h4 class="text-theme-colored">Mr. Shubahm jain</h4>
                <p>The training room at Mervyn Lambert is a vast improvement and fantastic addition to the facilities. The layout works well for small groups with the room having sufficient heating and ventilation for a comfortable learning environment all year round. Consideration has been given to the ability to control light levels so the projector is always bright and clear, even in brilliant sunshine.


                </p>
              </div>

            </div>
            <div class="item">

              <div class="comment">
                <img class="img-circle" alt="Mr. Anil aggarwal" src="images/testimonials/s5.jpg">
                <h4 class="text-theme-colored">Mr. Anil aggarwal</h4>
                <p>Have just spent three enjoyable days at Southwold watching Royal Ascot and I wanted you to know how much I appreciate all you have done to make this an exceptional home. The interior design, furniture, carpets, fittings etc display a a flair which I have seldom seen in interior designers before. It is so in keeping with the property, the location and what we need for the house for - a family holiday home.



                </p>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


</div>
<!-- end main-content -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- php footer code  -->
<?php include "footer.php"; ?>


<script>
  //This function is for our project section
  var a = 0;
  var b = 0;
  var c = 0;
  var d = 0;
  document.querySelector(".my-social-media").style.display = "none";


  function pc() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {


      if (a < 200) {
        a++;
      }
      if (b < 195) {
        b++;
      }
      if (c < 140) {
        c++;
      }
      if (d < 45) {
        d++;
      }
    }
    document.getElementById("projectcomplete").innerHTML = a;
    document.getElementById("happycustmor").innerHTML = b;
    document.getElementById("staff").innerHTML = c;
    document.getElementById("ongoingproject").innerHTML = d;

  }


  setInterval(pc, 50);

  function hideSocial() {

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

      document.querySelector(".my-social-media").style.display = "block";
      document.querySelector(".bookc").style.display = "flex";


    } else {
      document.querySelector(".my-social-media").style.display = "none";
      document.querySelector(".bookc").style.display = "none";


    }
  }
  setInterval(hideSocial, 100);
</script>

<script>
  setTimeout(function(){ 
    document.querySelector(".pop-up").style.display = "block";


   }, 3000);



  // close button pop up
  function closepopup() {
    var x = document.querySelector(".pop-up").style.display = "none";


  }


  //     new TypeIt("#hero", {
  //   speed: 100,
  //   startDelay: 900
  // })
  // .type("", {delay: 500})
  // .move(-8, {speed: 15, delay: 100})







  // .go();
  function runslide() {
    var btn = document.getElementById("slidenextbutton");
    // var btn2 = document.querySelector(".fa-angle-right");
    btn.click();
    // btn2.click();

  }


  setInterval(runslide, 4000);

  $('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    margin: 10,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })



  // owl crausal 
</script>