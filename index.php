<?php get_header() ?>


<div class="container-fluid -sm-md-lg-xl" id="carousel1">
  <section class="container">
    <div id="myCarousel" class="carousel slide flex" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php bloginfo('template_directory');?>/img/cafe.png" class="d-block w-100" alt="image1">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory');?>/img/img-2.png" class="d-block w-100 h-440" alt="image2">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory');?>/img/img-3.png" class="d-block w-100 h-440" alt="image3">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory');?>/img/img-4.png" class="d-block w-100 h-440" alt="image4">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory');?>/img/img-5.png" class="d-block w-100 h-440" alt="image5">
        </div>
      </div>
  </section>
</div>





<div class="container-fluid -sm-md-lg-xl shadow p-9" id="card2">
  <div class="container" id="section-card">
    <div class="card-deck flex-lg-nowrap">
      <div class="row w-100 m-0 justify-content-between">
        <div class="col-md-6 card border-0" style="width: 18rem;">
          <div class="card-body p-3">
            <div class="row align-items-center p-3 justify-content-around">
              <div><img src="<?php bloginfo('template_directory');?>/img/logo-pen.png" class="card-img-top" alt="logo-pen" width="40" height="40"></div>
              <h6 class="card-title text-uppercase">clean theme</h6>
            </div>
              <div class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
              </div>
              <div class="p-3">
              <i class="fas fa-chevron-right"></i>
              <a href="#" class="card-link">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 card border-0" style="width: 18rem;">
            <div class="card-body p-3">
              <div class="row align-items-center p-3 justify-content-around">
                <div><img src="<?php bloginfo('template_directory');?>/img/logo-screen.png" class="card-img-top" alt="logo-screen" width="40" height="40"></div>
                <h6 class="card-title text-uppercase">responsive design</h6>
              </div>
              <div class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
              </div>
              <div class="p-3">
              <i class="fas fa-chevron-right"></i>
              <a href="#" class="card-link">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-100 m-0 justify-content-between">
        <div class="col-md-6 card border-0" style="width: 18rem;">
            <div class="card-body p-3">
              <div class="row align-items-center p-3 justify-content-around">
                <div><img src="<?php bloginfo('template_directory');?>/img/logo-layers.png" class="card-img-top" alt="logo-layers" width="40" height="40"></div>
                <h6 class="card-title text-uppercase">fully layer psd</h6>
              </div>
              <div class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
              </div>
              <div class="p-3">
              <i class="fas fa-chevron-right"></i>
              <a href="#" class="card-link">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 card border-0" style="width: 18rem;">
            <div class="card-body p-3">
              <div class="row align-items-center p-3 justify-content-around">
                <div><img src="<?php bloginfo('template_directory');?>/img/logo-paper-plane.png" class="card-img-top" alt="logo-paper-plane" width="40" height="40"></div>
                <h6 class="card-title text-uppercase">ready for coding</h6>
              </div>
              <div class="card-text overflow-hidden">
              </div>
              <div class="p-3">
              <i class="fas fa-chevron-right"></i>
              <a href="#" class="card-link">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="container-fluid my-3 ">
  <section class="container d-flex justify-content-between">

    <div id="myCarousel-image" class="carousel w-100 d-flex flex-column" data-ride="carousel">

          <h4 class="text-uppercase"><img src="<?php bloginfo('template_directory');?>/img/logo-arrow.png" alt="logo-fleche">latest work</h4>

          <a class="carousel-control-prev" id="prev" href="#myCarousel-image" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon hoverable" aria-hidden="true"></span>
          <span class="sr-only">Previous</span></a>


          <a class="carousel-control-next" id="next" href="#myCarousel-image" role="button" data-slide="next">
          <span class="carousel-control-next-icon hoverable" aria-hidden="true"></span>
          <span class="sr-only">Next</span></a>



      <div class="carousel-inner">
        <div class="carousel-item active" id="slide1">
          <div class="d-none d-lg-block">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
            </div>
          </div>
          <div class="d-none d-sm-block d-md-none">
            <div class="d-flex w-100 border justify-content-center">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
            </div>
          </div>
        </div>
        <div class="carousel-item" id="slide2">
          <div class="d-none d-lg-block">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
            </div>
          </div>
          <div class="d-xs-block d-sm-block d-md-none">
              <div class="d-flex w-100 border justify-content-between">
                <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              </div>
          </div>
        </div>
        <div class="carousel-item" id="slide3">
          <div class="d-none d-lg-block">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
            </div>
          </div>
          <div class="d-xs-block d-sm-block d-md-none">
              <div class="d-flex w-100 border justify-content-center">
                <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
              </div>
          </div>
        </div>
        <div class="carousel-item" id="slide4">
          <div class="d-none d-lg-block">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
              <img src="<?php bloginfo('template_directory');?>/img/im3.png" class="d-block p-4 flex-fill img-fluid" alt="im3">
            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="d-flex w-100 border justify-content-between">
              <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              <img src="<?php bloginfo('template_directory');?>/img/im1.png" class="d-block p-4 flex-fill img-fluid" alt="im1">
              <img src="<?php bloginfo('template_directory');?>/img/im2.png" class="d-block p-4 flex-fill img-fluid" alt="im2">
            </div>
          </div>
          <div class="d-xs-block d-sm-block d-md-none">
              <div class="d-flex w-100 border justify-content-center">
                <img src="<?php bloginfo('template_directory');?>/img/im4.png" class="d-block p-4 flex-fill img-fluid" alt="im4">
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>





<div  class="container" id="section-4">
  <div class="card-group border-top">
    <div class="card card h-30">

      <div class="card-body">
        <h5 class="card-title text-uppercase"><img src="<?php bloginfo('template_directory');?>/img/logo-chat.png" alt="logo-fleche">testimonials</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="card-text"><em> John Travis, CEO, <a href="#">DomainName.com</a></em></p>
      </div>
    </div>
    <div class="card h-30" >
      <div class="card-body mb-2">
        <h5 class="card-title text-uppercase"><img src="<?php bloginfo('template_directory');?>/img/logo-clients.png" alt="logo-clients">our clients</h5>

          <table class="container table table p-0 m-0">
            <tbody>
              <tr class="flex-row w-100 d-flex justify-content-around border">

                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-responsive w-100" src="<?php bloginfo('template_directory');?>/img/cnn.png" alt="logo-clients"/></a></td>
                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-responsive w-100" src="<?php bloginfo('template_directory');?>/img/cox.png" alt="logo-clients"></a></td>
                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-responsive w-100" src="<?php bloginfo('template_directory');?>/img/deere.png" alt="logo-clients"></a></td>

              </tr>
              <tr class="flex-row w-100 d-flex border justify-content-around">
                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-fluid w-100 h-auto" src="<?php bloginfo('template_directory');?>/img/apartfinder.png" alt="logo-clients"></a></td>
                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-fluid w-100 h-auto" src="<?php bloginfo('template_directory');?>/img/bananaboat.png" alt="logo-clients"></a></td>
                <td class="d-inline-flex align-items-center justify-content-center border shadow logo-clients" width="33.33%" height="100px"><a href="#"><img class="img-fluid w-100 h-auto" src="<?php bloginfo('template_directory');?>/img/fujifilm.png" alt="logo-clients"></a></td>
              </tr>
            </tbody>
          </table>

      </div>
    </div>

    <div class="jumbotron border p-3 mt-4">
      <div class="d-flex row-flex flex-wrap justify-content-between align-items-center h-auto" id="download">
        <div class="col-sm-9 col-xs-12">
          <p class="lead">This is a clean and modern, four column website PSD template. You can code it into a Wordpress website, HTML5 responsive website for your personal or client works. So ahead and download this wonderful PSD template!</p>
        </div>
        <div class="d-flex col-sm-3 col-xs-12 justify-content-center" id="downloadbutton">
          <a class="btn btn-sm-xs" href="#" role="button"><img src="<?php bloginfo('template_directory');?>/img/logo-download.png" alt="logo download">&nbsp DOWNLOAD PSD</a>
        </div>
      </div>
    </div>
  </div>
</div>






<?php get_footer() ?>
