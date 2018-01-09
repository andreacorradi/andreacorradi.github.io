<?
$sezione = 2;

$nomeprogetto['it'] = "Psychological types";
$nomeprogetto['en'] = "Psychological types";

include ("andrea-header.php"); ?>

  <!-- Page Title -->
  <section class="page-title page-title-banner page-title-image-parallax space-bottom-3x" style="background-image:url(img/portfolio/psychotypes/psychotypes-header.png);">
    <div class="container">
      <h1 class="white-text"><?=$nomeprogetto[$lingua]?></h1>
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
            <p>Casa dell’acqua is an exhibition set up in the public swimming-pool of Bari. It’s an overview of the water topic, beginning from the physical/chemical aspects and ending with an exploration of the links between the water and Bari.</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-info space-bottom">Tools</h5>
            <ul class="list-unordered">
              <li>Illustrator</li>
              <li>Indesign</li>
              <li>Photoshop</li>
              <li>Excel</li>
              <li>Processing</li>
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
              <li>Print design</li>
              <li>Information design</li>
              <li>UX/UI design</li>
            </ul>
          </div>
          <div class="col-md-7">
            <h5 class="text-info space-bottom">Client</h5>
            <span class="space-bottom inline">Asteria Multimedia<br>Comune di Bari</span><br>
            <!-- <a href="http://www.andreacorradi.com/visual_literature/" target="_blank" class="btn btn-primary">Visit website</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="space-top-2x visible-xs"></div>
    <div class="single-post-meta space-top">
      <div class="column">
        <div class="post-meta">
          <!-- <span>March 30, 2015 Developed in collaboration with...</span> -->
          <!-- Developed in collaboration with Thomas Tortato -->
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
          <p>The visual identity of the exhibition is based on the schematic representation of water in motion. I set up a basic animation (using Processing) representing the water as a system of circles whose size depends on the Navier-Stokes equations of fluid dynamics.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Video -->
  <section class="section-fw padding-top-3x padding-bottom bg-solid-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 space-bottom-2x">
          <canvas id="canvas_about" width="960px" heigth="960px" data-processing-sources="img/portfolio/psychotypes/psychotypes_web_interactive/psychotypes_web_interactive.pde"></canvas>
        </div>
      </div>
    </div>
  </section>


  <!-- Text -->
  <section class="container space-top-3x padding-bottom-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>The generated textures have been used as backgrounds on the printed panels and characterize the whole exhibition.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Single image resp -->
  <!-- <section class="fullscreen-resp-img bg-solid-white" style="background-image:url(img/portfolio/dolomitienergia/timeline-full.png);">
  </section> -->


  <!-- Scroll to Top Button -->
  <!-- Use 'data-scroll-top' attribute to set value at which point the scroll to top button appears. -->
  <a href="#" class="btn btn-icon btn-primary scroll-to-top-btn scroll-up" data-scroll-top="600">
    <i class="pe-7s-angle-up"></i>
  </a>

  <? include ("andrea-footer.php"); ?>


  <!-- JavaScript (jQuery) libraries and scripts -->
  <script type="text/javascript" src="img/portfolio/psychotypes/processing-1.1.0.min.js"></script>

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
