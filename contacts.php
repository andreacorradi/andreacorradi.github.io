<?
$sezione = 3;

include ("andrea-header.php"); ?>

  <!-- Container -->
  <section class="container">

    <!-- Page Title -->
    <div class="page-title space-top">
      <div class="ph-table">
        <div class="ph-td">
          <h1>Contacts</h1>
        </div>
        <!-- <div class="ph-td text-right">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li>Contacts v.1</li>
          </ol>
        </div> -->
      </div>
    </div>
  </section><!-- Container End -->

  <!-- Full Width Map -->
  <section class="section-fw">
    <!-- Wrap your map with ".google-map-container" for usage with info box. -->
    <div class="google-map-container">
      <div class="container">
        <div class="map-info-box">
          <!-- <div class="inline map-info-box-logo">
            <div class="logo-icon"><img src="../img/logo/logo-big.png" alt="iTheme"></div>
            <h4>Andrea Corradi</h4>
          </div> -->
          <div class="inline">
            <address class="space-bottom">
              <strong>Andrea Corradi</strong><br>
              via Leoncavallo, 37/A<br>
              20131 Milano<br>
              <a href="mailto:first.last@example.com">hello@andreacorradi.com</a>
              <div class="social-buttons">
                <i class="bi-skype"></i>&nbsp;&nbsp;andrea.corradi74
              </div>
              <!-- P.IVA 06371170967 -->
              <!-- <div class="divider"></div> -->
            </address>
          </div>
        </div>
      </div>
      <!-- Data API:
           data-height="500" height of the map in pixels
           data-address="Your address" string
           data-zoom="number" to control map zoom when loaded
           data-disable-controls="false/true" enable/disable map controls like pan, zoom, etc.
           data-scrollwheel="true/false" enable/disable mouse scroll wheel zoom
           data-marker="path_to_your_image" path to custom marker image
           data-marker-title=" Your title" appears on marker hover
           data-styles="[array]" you can adjust the look and feel of your map. Recommend to use https://snazzymaps.com
       -->
      <div class="google-map"
           data-height="450"
           data-address="Via+Ruggero+Leoncavallo,+37,+20131+Milano"
           data-zoom="6"
           data-disable-controls="false"
           data-scrollwheel="false"
           data-marker="img/map-marker2.png"
           data-marker-title="Andrea Corradi"
      ></div>
    </div>
  </section><!-- Full Width Map End -->

  <!-- Container -->
  <section class="container padding-top-3x padding-bottom-3x">
    <div class="row">
      <div class="col-sm-6 space-bottom-2x">
        <div class="block-title">
          <h3>Now I'm working at TODO</h3>
          <hr>
        </div>
        <p class="size-lg">I'm currently working at <a style="color:#007aff !important; " href="https://todo.to.it/" target="_blank">TODO</a>, a creative agency based in Turin.<br>We envision, design, and bring to life our clients’ special projects, brands, spaces, interactive experiences, and products so they can speak directly to users’ hearts.<br><br>
          We are a multidisciplinary team working mainly at the intersection between design and technology, and my role in the team ranges from concept to production. I'm an interaction and information designer and I often follow the whole life of a digital product, from understanding client's needs to design, prototype, code and test it. I usually lead the design phase, quite often I come up with an interactive prototype and I frequently code some parts of the final product.</p>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-6 space-bottom-2x">
        <div class="block-title">
          <h3>Get in touch!</h3>
          <hr>
        </div>
        <div class="content-box content-box-horizontal text-left">
          <div class="icon-cell">
            <i class="icon icon-3x pe-7s-mail text-success"></i>
          </div>
          <div class="content-cell">
            <h3 class="content-box-title">E-mail</h3>
            <p>You can write me an email <a href="mailto:first.last@example.com" style="color:#007aff !important;">hello@andreacorradi.com</a>; I'll usually answer within a working day.</p>
          </div>
        </div>
        <div class="content-box content-box-horizontal text-left">
          <div class="icon-cell">
            <i class="icon icon-info flaticon-skype7 text-success"></i>
          </div>
          <div class="content-cell">
            <h3 class="content-box-title">Skype</h3>
            <p>We can arrange Skype calls to know each other and to collaborate. My contact is <span style="color:#007aff !important;">andrea.corradi74</span></p>

          </div>
        </div>
        <!-- <div class="content-box content-box-horizontal text-left">
          <div class="icon-cell">
            <i class="icon pe-7s-call text-success"></i>
          </div>
          <div class="content-cell">
            <h3 class="content-box-title">Telephone</h3>
            <p>You can call me: <span style="color:#007aff !important;">+39 340 1348487</span>. If don't answer I'll call you back as soon as possible.</p>
          </div>
        </div> -->
      </div>
    </div>


  </section><!-- Container End -->


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
  <script src="js/plugins/gmap3.min.js"></script>
  <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/scripts.js"></script>

</body><!-- Body End -->

</html>
