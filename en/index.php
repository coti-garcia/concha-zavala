<!DOCTYPE html>
<html lang="en">

  <?php include 'includes/head.php';?>

  <body>
  <?php $activemenu="Home"; ?>
    <!-- Preloader-->
   <!--<div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <svg class="preloader-icon" width="34" height="38" viewbox="0 0 34 38">
              <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>-->
    <!-- End Preloader-->
    <div id="wrapper">
      <?php include 'includes/navbar.php';?>
      
      <section id="home">
        <div id="home-slider">
          <div class="slide-item">
            <img src="../images/bg-image-28.jpg" alt="">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1 class="font-big">Prevent, confront and solve conflicts</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item">
            <img src="../images/bg-image-29.jpg" alt="">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1 class="font-big">Our aim is to build trusting relationships</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="title text-center">
                <h6>About Us</h6>
                <p class="fw-300">In Concha Zavala Abogados we strive to  <span class="typed-words colored-text fw-400" data-strings="[&quot;prevent&quot;, &quot;confront&quot;, &quot;solve&quot;]"></span>conflicts.
                  <br>Our aim is to build trusting relationships with our clients because we know that it is of the utmost importance in order to succeed as well as essential to the creation of long lasting partnerships.</p>
              </div>
              <div class="section-content text-center pt-25"><a class="btn btn-bordered upper no-radius" href="page-about.php">More Information</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="parallax-section" id="services">
        <div class="row-parallax-bg">
          <div class="parallax-wrapper">
            <div class="parallax-bg">
             <!--<img src="../images/bg-image-26.jpg" alt="">-->
            </div>
            <div class="parallax-overlay"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="title text-center">
                <h6>Practice Areas</h6>
              </div>
            </div>
          </div>
          <div class="row flex-row">
            <div class="col-flex mt-25 mb-25">
              <div class="icon-box align-center" data-animation="zoomOut">
                <div class="animated-icon white" data-icon="../images/icons/world.svg"></div>
                <h4 class="upper">Litigation in Civil, Commercial and Economic Law</h4>
              </div>
            </div>
            <div class="col-flex mt-25 mb-25">
              <div class="icon-box align-center" data-animation="zoomOut" data-delay="300">
                <div class="animated-icon white" data-icon="../images/icons/cart.svg"></div>
                <h4 class="upper">Litigation in Competition Law, Consumer Law and Regulated Markets</h4>
              </div>
            </div>
            <div class="col-flex mt-25 mb-25">
              <div class="icon-box align-center" data-animation="zoomOut" data-delay="600">
                <div class="animated-icon white" data-icon="../images/icons/sheet-pencil.svg"></div>
                <h4 class="upper">Litigation in Constitutional and Administrative Law</h4>
              </div>
            </div>
            <div class="col-flex mt-25 mb-25">
              <div class="icon-box align-center" data-animation="zoomOut" data-delay="900">
                <div class="animated-icon white" data-icon="../images/icons/graph-3.svg"></div>
                <h4 class="upper">Counseling in Regulatory Matters</h4>
              </div>
            </div>
            <div class="col-flex mt-25 mb-25">
              <div class="icon-box align-center" data-animation="zoomOut" data-delay="1200">
                <div class="animated-icon white" data-icon="../images/icons/target.svg"></div>
                <h4 class="upper">Counseling in Corporate Governance Matters</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="team">
        <div class="container">
          <div class="title text-center">
            <h2>Team</h2>
          </div>
          <div class="section-content pt-25 pb-25">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="team-member" data-animation="fadeInUp">
                  <div class="team-image">
                    <img src="../images/team-1.jpg" alt="">
                  </div>
                  <div class="team-overlay">
                    <div class="team-info">
                      <h4>Germán Concha</h4><span>Main Partner</span>
                      <ul class="team-social">
                        <li><a href="#" target="_blank"><i class="hc-linkedin"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member" data-animation="fadeInUp" data-delay="300">
                  <div class="team-image">
                    <img src="../images/team-2.jpg" alt="">
                  </div>
                  <div class="team-overlay">
                    <div class="team-info">
                      <h4>Wanira Arís</h4><span>Partner</span>
                      <ul class="team-social">
                        <li><a href="#" target="_blank"><i class="hc-linkedin"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member" data-animation="fadeInUp" data-delay="600">
                  <div class="team-image">
                    <img src="../images/team-3.jpg" alt="">
                  </div>
                  <div class="team-overlay">
                    <div class="team-info">
                      <h4>Alejandra Bohle</h4><span>Associate</span>
                      <ul class="team-social">
                        <li><a href="#" target="_blank"><i class="hc-linkedin"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="team-member" data-animation="fadeInUp" data-delay="900">
                  <div class="team-image">
                    <img src="../images/team-4.jpg" alt="">
                  </div>
                  <div class="team-overlay">
                    <div class="team-info">
                      <h4>Valentina Santelices</h4><span>Associate</span>
                      <ul class="team-social">
                        <li><a href="#" target="_blank"><i class="hc-linkedin"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <?php include 'includes/footer.php';?>
    </div>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bundle.js"></script>
    <script type="text/javascript" src="../js/SmoothScroll.js"></script>
    <script type="text/javascript" src="../js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  </body>

</html>