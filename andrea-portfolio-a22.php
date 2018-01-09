<?
$sezione = 2;

$nomeprogetto['it'] = "L'autostrada del futuro";
$nomeprogetto['en'] = "Motorway of the future";

include ("andrea-header.php"); ?>

  <!-- Page Title -->
  <section class="page-title page-title-banner page-title-image-parallax space-bottom-3x" style="background-image:url(img/portfolio/a22/a22-header.png);">
    <div class="container">
      <h1><?=$nomeprogetto[$lingua]?></h1>
      <!-- <ol class="breadcrumb">
        <li><a href="index.php"><?=$titolo[$lingua][0]?></a></li>
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
            <p>Presentation for Autostrada del Brennero, showing the forthcoming actions on the motorway through an interactive map and eleven sections featuring text, videos and interactive visualizations.</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-info space-bottom">Tools</h5>
            <ul class="list-unordered">
              <li>Bootstrap framework</li>
              <li>D3 + Javascript + Leaflet<br>(interactive visualization)</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <div class="row">
          <div class="col-md-5">
            <h5 class="text-info space-bottom">Tasks</h5>
            <ul class="list-unordered">
              <li>Concept</li>
              <li>Data collection</li>
              <li>Data processing</li>
              <li>Visual design</li>
              <li>Prototyping</li>
              <li>Front-end coding</li>
            </ul>
          </div>
          <div class="col-md-7">
            <h5 class="text-info space-bottom">Client</h5>
            <span class="space-bottom inline">Asteria Multimedia<br>Autostrada del Brennero</span><br>
            <span class="space-bottom inline" style="font-weight:700; line-height:18px;">Interactive version<br>available on demand</span>
            <!-- <h5 class="text-info space-bottom" style="font-weight:400;">Interactive version<br>available on demand</h5> -->
            <!-- <a href="" target="_blank" class="btn btn-primary">Interactive version on demand</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="space-top-2x visible-xs"></div>
    <div class="single-post-meta space-top">
      <div class="column">
        <div class="post-meta-left">
          <!-- <span>March 30, 2015 Developed in collaboration with...</span> -->
          Developed in collaboration with Thomas Tortato
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



  <!-- Double image -->
  <section class="section-split space-bottom-3x">
    <div class="column-singlework-grid2">
      <img src="img/portfolio/a22/a22-tile-col2-1.png" alt="">
    </div>
    <div class="column-singlework-grid2">
      <img src="img/portfolio/a22/a22-tile-col2-2.png" alt="">
    </div>
  </section>


  <!-- Text -->
  <section class="container padding-bottom-3x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>The main map displays the 11 kinds of intervention through icons combining color and shape. The sections show each single operation (position and in some case magnitude) onto a linear visualization of the motorway.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>

  <!-- Video -->
  <!-- <section class="section-fw bg-solid-white padding-top-3x padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 space-bottom-2x">
          <div class="embed-responsive embed-responsive-16by9 space-bottom">
            <iframe src="https://player.vimeo.com/video/92688656?color=007aff&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- Single image -->
  <section class="section-fw bg-solid-white">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/a22/a22-tile-col1-1.png" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/a22/a22-tile-col1-1.png" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw bg-solid-white">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/a22/a22-tile-col1-2.png" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/a22/a22-tile-col1-2.png" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Text -->
  <section class="container space-top-3x padding-bottom-3x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>Below the video two or three simple visualizations show some key indicators about the section topic.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw bg-solid-white">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/a22/a22-tile-col1-3.png" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/a22/a22-tile-col1-3.png" class="block-center" /></noscript>
    </div>
  </section><!-- Single image -->


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
