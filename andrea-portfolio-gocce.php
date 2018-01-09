<?
$sezione = 2;

$nomeprogetto['it'] = "Gocce scuola rebozo";
$nomeprogetto['en'] = "Gocce scuola rebozo";

include ("andrea-header.php"); ?>

  <!-- Page Title -->
  <section class="page-title page-title-banner page-title-image-parallax space-bottom-3x" style="background-image:url(img/portfolio/gocce/gocce-header.jpg);">
    <div class="container">
      <h1><?=$nomeprogetto[$lingua]?></h1>
      <!-- <ol class="breadcrumb">
        <li><a href="index.html"><?=$titolo[$lingua][0]?></a></li>
        <li><a href="<?=$menu_link[$lingua][$sezione]?>"><?=$titolo[$lingua][$sezione]?></a></li>
        <li><?=$nomeprogetto[$lingua]?></li>
      </ol> -->
    </div>
  </section>

  <!-- Project Overview -->
  <section class="container space-bottom-2x">
    <div class="block-title">
      <h2>Project Overview</h2>
      <hr class="hr-bold hr-info">
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-6">
        <div class="row">
          <div class="col-md-8">
            <h5 class="text-info space-bottom">Overview</h5>
            <p>Dynamic visual identity and website for OMC, a company operating in the manufacture of high precision mechanical parts on order.</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-info space-bottom">Tools</h5>
            <ul class="list-unordered">
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>Wordpress</li>
              <li>html+css+php</li>
              <li>stamp</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <div class="row">
          <div class="col-md-5">
            <h5 class="text-info space-bottom">Tasks</h5>
            <ul class="list-unordered">
              <li>Visual identity</li>
              <li>Visual design</li>
              <li>Web design</li>
              <li>Web development</li>
            </ul>
          </div>
          <div class="col-md-7">
            <h5 class="text-info space-bottom">Client</h5>
            <span class="space-bottom inline">Officine Meccaniche Capitanio</span><br>
            <!-- <span class="space-bottom inline" style="font-weight:700; line-height:18px;">Interactive version<br>available on demand</span> -->
            <!-- <a href="http://www.andreacorradi.com/archichef/" target="_blank" class="btn btn-primary">View website</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="space-top-2x visible-xs"></div>
    <div class="single-post-meta space-top">
      <div class="column">
        <div class="post-meta-left">
          <!-- <span>March 30, 2015 Developed in collaboration with...</span> -->
        </div>
      </div>
    </div>
    <hr>
    <!-- <div class="tags">
      <a href="#" class="tag tag-info">Web Design</a>
      <a href="#" class="tag tag-success">Development</a>
      <a href="#" class="tag tag-warning">Company Identity</a>
    </div> -->
  </section><!-- Project Overview End -->


  <!-- Text -->
  <section class="container padding-bottom-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>The tools I found in the factory have been my source of visual inspiration. I took photos of their sections and I later transformed them into vector objects.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Double image -->
  <section class="section-split bg-solid-white">
    <div class="column-singlework-grid2">
      <img src="img/portfolio/gocce/biglietto1.jpg" alt="">
      <img src="img/portfolio/gocce/biglietto2.jpg" alt="">
    </div>
    <div class="column-singlework-grid2">
      <img src="img/portfolio/gocce/adesivi.jpg" alt="">
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/gocce/biglietto-foto.jpg" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/gocce/biglietto-foto.jpg" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Text -->
  <section class="container space-top-3x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>OMC is a small, high-tech, dynamic and flexible company, so I developed a dynamic identity: the six most relevant vector objects were used to shape the logo, and the whole set to build pattern images of the manufactured products.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/gocce/home.png" class="block-center" alt=""><noscript><img src="img/portfolio/gocce/home.png" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Text -->
  <section class="container padding-bottom-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>There are six different versions of the logo: in order to print the six versions of headed paper, business cards and envelopes in a cheap way, six rubber stamps with the six different logo versions were created.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw">
    <div class="container-singlework-grid">
      <img src="img/portfolio/omc/page.png" class="block-center" alt="">
    </div>
  </section>



  <!-- Scroll to Top Button -->
  <!-- Use 'data-scroll-top' attribute to set value at which point the scroll to top button appears. -->
  <a href="#" class="btn btn-icon btn-primary scroll-to-top-btn scroll-up" data-scroll-top="600">
    <i class="pe-7s-angle-up"></i>
  </a>

  <? include ("andrea-footer.php"); ?>


  <!-- JavaScript (jQuery) libraries and scripts -->
  <script src="js/libs/jquery-1.11.2.min.js"></script>
  <script src="js/libs/jquery.easing.min.js"></script>
  <script src="js/plugins/bootstrap.min.js"></script>
  <script src="js/plugins/smoothscroll.js"></script>
  <script src="js/plugins/velocity.min.js"></script>
  <script src="js/plugins/form-plugins.js"></script>
  <script src="js/plugins/waypoints.min.js"></script>
  <script src="js/plugins/icon-click-effect.js"></script>

  <script src="masterslider/masterslider.min.js"></script>

  <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins/morph-devices.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/md-init.js"></script>

</body><!-- Body End -->

</html>
