<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php';?>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <svg class="preloader-icon" width="34" height="38" viewbox="0 0 34 38">
              <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <div id="wrapper">
    <?php include 'includes/navbar.php';?>
      <section class="height-100 dark-bg">
        <div id="particle-canvas" data-dot-color="#00c3da" data-line-color="#2f2f2f"></div>
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="error-page">
                <div class="title">
                  <h1 class="colored-text">404</h1>
                  <h2>Oh no! There was an error.</h2>
                  <h4>We couldn't find the page you were looking for.</h4>
                </div><a class="btn btn-color" href="#">Back to the home</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include 'includes/footer.php';?>
    </div>
    <div id="search-modal">
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <form class="search-form">
              <input class="form-control" type="search" required name="s" placeholder="Search and hit enter" value="">
            </form>
          </div>
        </div>
      </div>
      <a id="close-search-modal" href="#">
        <i class="hc-close"></i>
      </a>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>

</html>