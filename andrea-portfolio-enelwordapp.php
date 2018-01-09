<?
$sezione = 2;

$nomeprogetto['it'] = "Enel wordapp";
$nomeprogetto['en'] = "Enel wordapp";

include ("andrea-header.php"); ?>

  <!-- Page Title -->
  <section class="page-title page-title-banner page-title-image-parallax space-bottom-3x" style="background-image:url(img/portfolio/enelwordapp/enelwordapp-header.png);">
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
            <p>On January 26th 2016, Enel (the main Italian electric and power distribution company) revealed its new visual identity during a one-day event held in Madrid.<br>During the presentation sessions running before the new logo reveal, the interactive led wall I worked at gathered and displayed some keywords coming from a remote server application. Each time a keyword is sent by the server application, it is attached to a node and displayed.</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-info space-bottom">Tools</h5>
            <ul class="list-unordered">
              <li>D3.js</li>
              <li>Javascript</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <div class="row">
          <div class="col-md-5">
            <h5 class="text-info space-bottom">Tasks</h5>
            <ul class="list-unordered">
              <li>Visual design</li>
              <li>Interaction design</li>
              <li>Coding</li>
            </ul>
          </div>
          <div class="col-md-7">
            <h5 class="text-info space-bottom">Client</h5>
            <span class="space-bottom inline">TODO<br>Enel</span><br>
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
          Developed in collaboration with TODO (art direction, remote server side web application, webgl layer). I took care of the visual design and the front end development.<br>
          <i>The keywords displayed into video and images are test placeholders.</i>
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
          <p>The background is a network of rectangles, routed as a triangular Delaunay mesh. Each perturbation reflects on the whole network, since the nodes are bound together by a force directed layout.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Video -->
  <section class="section-fw padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 space-bottom-2x">
          <div class="embed-responsive embed-responsive-16by9 space-bottom">
            <iframe src="https://player.vimeo.com/video/157709811?color=007aff&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Text -->
  <section class="container padding-bottom-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>Lots of parameters are configurable: the number of available nodes, the randomness of the layout, the maximum number of keywords allowed, the ageing effect (the keywords become gradually transparent after a certain time interval).</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>
  

  <!-- Single image -->
  <section class="section-fw bg-solid-white">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/enelwordapp/enelwordapp-centralfull1.png" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/enelwordapp/enelwordapp-centralfull1.png" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Text -->
  <section class="container space-top-3x padding-bottom-2x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>The network has a two-stage dynamic: there is a long period very small fluctuation, and a fast perturbation every time a node is populated by a keyword. </p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>


  <!-- Single image -->
  <section class="section-fw bg-solid-white">
    <div class="container-singlework-grid">
      <img data-src="img/portfolio/enelwordapp/mockup.png" class="block-center lazyload" alt=""><noscript><img src="img/portfolio/enelwordapp/enelwordapp-centralfull1.png" class="block-center" /></noscript>
    </div>
  </section>


  <!-- Text -->
  <section class="container space-top-3x padding-bottom-3x">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <blockquote>
          <p>The application can run on three different led walls: a big one in the center of the stage, and a smaller one on each side. The wings carry only the last 5 keywords, while the central one accumulates all the keywords.</p>
          <!-- <footer>C.E.R.A. Rapone</footer> -->
        </blockquote>
      </div>
    </div>
  </section>

  <!-- Double image -->
  <section class="section-split bg-solid-white">
    <div class="column-singlework-grid2">
      <img data-src="img/portfolio/enelwordapp/enelwordapp-wing1.png" class="lazyload" alt=""><noscript><img src="img/portfolio/enelwordapp/enelwordapp-wing1.png" /></noscript>
    </div>
    <div class="column-singlework-grid2">
      <img data-src="img/portfolio/enelwordapp/enelwordapp-wing2.png" class="lazyload" alt=""><noscript><img src="img/portfolio/enelwordapp/enelwordapp-wing2.png" /></noscript>
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
