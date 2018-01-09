<?
$sezione = 2;

$enelwordapp['it'] = "Enel word app";
$enelwordapp['en'] = "Enel word app";
$vislit['it'] = "Letteratura visiva";
$vislit['en'] = "Visual literature";
$a22['it'] = "L'autostrada del futuro";
$a22['en'] = "Motorway of the future";
$munichre['it'] = "Allestimento uffici Münich RE";
$munichre['en'] = "Münich RE office walls";
$dimargalaxy['it'] = "The Dimar galaxy";
$dimargalaxy['en'] = "The Dimar galaxy";
$archichef['it'] = "Archichef";
$archichef['en'] = "Archichef";
$cotonianimati['it'] = "Cotoni animati";
$cotonianimati['en'] = "Cotoni animati";
$omc['it'] = "Officine Meccaniche Capitanio";
$omc['en'] = "Officine Meccaniche Capitanio";
$dolomitienergia['it'] = "Dolomiti Hydrotour";
$dolomitienergia['en'] = "Dolomiti Hydrotour";
$casadellacqua['it'] = "Casa dell'acqua";
$casadellacqua['en'] = "Water house";
$montiaurunci['it'] = "Centro visite Parco Monti Aurunci";
$montiaurunci['en'] = "Monti Aurunci visitor center";
$navegnacervia['it'] = "Centro visite Riserva Navegna e Cervia";
$navegnacervia['en'] = "Navegna e Cervia visitor center";
$magma['it'] = "Museo delle Arti in Ghisa della MAremma";
$magma['en'] = "Museo delle Arti in Ghisa nella MAremma";
$museogeologia['it'] = "Museo geologico di Predazzo";
$museogeologia['en'] = "Geology museum in Predazzo";
$gocce['it'] = "Gocce scuola rebozo";
$gocce['en'] = "Gocce scuola rebozo";
$demix['it'] = "Demix — Atlnte delle periferie";
$demix['en'] = "Demix — Atlas of the outskirts";
$dsi4eu['it'] = "DSI4EU — Innovazione sociale in Europa";
$dsi4eu['en'] = "Digital social innovation explorer";
$mozfest['it'] = "2016 Mozfest - Installazioni interattive";
$mozfest['en'] = "2016 Mozfest - Interactive installations";
$ilfuturoe['it'] = "Il futuro è";
$ilfuturoe['en'] = "Il futuro è";

include ("andrea-header.php"); ?>


  <!-- Container -->
  <section class="container space-bottom-3x">

    <!-- Page Title -->
    <div class="page-title space-top">
      <div class="ph-table">
        <div class="ph-td">
          <h1>Works</h1>
        </div>
        <!-- <div class="ph-td text-right">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="works.php">Portfolio</a></li>
          </ol>
        </div> -->
      </div>
    </div><!-- Page Title End -->

    <!-- Filters -->
    <ul class="nav-filters space-bottom">
      <li class="active"><a data-filter="*" href="#">Show All</a></li>
      <li class=""><a data-filter=".dataviz" href="#">Data visualization</a></li>
      <li class=""><a data-filter=".identity" href="#">Visual identity</a></li>
      <li class=""><a data-filter=".interaction" href="#">Interaction</a></li>
      <li class=""><a data-filter=".print" href="#">Print</a></li>
    </ul>
    <div class="space-bottom-2x visible-xs"></div>

    <!-- Portfolio Grid 2 Colums -->
    <div class="grid isotope-grid cols-2 filter-grid">
      <div class="grid-sizer"></div>
      <div class="gutter-sizer"></div>

      <!-- Nesta DSI4EU -->
      <div class="grid-item interaction dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-dsi4eu.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <img src="img/portfolio/th/dsi4eu-thgrid.png" alt="Thumbnail">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-dsi4eu.php" class="tile-title"><h3><?=$dsi4eu[$lingua]?></h3></a>
            <p class="space-bottom">Interactive data visualization tool to explore the digital social innovation in Europe from three different perspectives.</p>
          </div>
        </div>
      </div>

      <!-- Demix -->
      <div class="grid-item print dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-demix.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <img src="img/portfolio/th/demix-thgridv2.jpg" alt="Thumbnail">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-demix.php" class="tile-title"><h3><?=$demix[$lingua]?></h3></a>
            <p class="space-bottom">Series of data visualizations about quantitiy and kind of facilities in the outskirts of 9 major cities.</p>
          </div>
        </div>
      </div>

      <!-- Mozfest -->
      <div class="grid-item interaction dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-mozfest.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/mozfest-thgrid2.png" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/mozfest-thgrid2.png" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-mozfest.php" class="tile-title"><h3><?=$mozfest[$lingua]?></h3></a>
            <p class="space-bottom">Five accessible, playful and slightly surreal experiences: a mix of physical and digital interfaces are used to expose the inner workings of the web.</p>
          </div>
        </div>
      </div>

      <!-- Il futuro è -->
      <div class="grid-item interaction">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-ilfuturoe.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/ilfuturoe-thgrid.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-ilfuturoe.php" class="tile-title"><h3><?=$ilfuturoe[$lingua]?></h3></a>
            <p class="space-bottom">Communication format with video interviews and custom website.</p>
          </div>
        </div>
      </div>

      <!-- Vislit -->
      <div class="grid-item interaction dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-vislit.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/vislit-thgrid.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/vislit-thgrid.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-vislit.php" class="tile-title"><h3><?=$vislit[$lingua]?></h3></a>
            <p class="space-bottom">Visualizing the writing style of an author through a diagram generated by the rhythm of the text.</p>
          </div>
        </div>
      </div>

      <!-- Münich-Re -->
      <div class="grid-item identity print">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-munichre.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/munichre-thgrid2.gif" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/munichre-thgrid2.gif" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-munichre.php" class="tile-title"><h3><?=$munichre[$lingua]?></h3></a>
            <p class="space-bottom">Graphic design of 4 office walls using a custom halftone screen effect generated with a self-programmed software.</p>
          </div>
        </div>
      </div>

      <!-- Dimar galaxy -->
      <div class="grid-item interaction dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-dimargalaxy.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/dimargalaxy-thgrid.png" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/dimargalaxy-thgrid.png" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-dimargalaxy.php" class="tile-title"><h3><?=$dimargalaxy[$lingua]?></h3></a>
            <p class="space-bottom">Interactive data visualization highlighting the differences in the sales of four sample supermarkets.</p>
          </div>
        </div>
      </div>

      <!-- Enel word app -->
      <!-- grid-item interaction dataviz
      andrea-portfolio-enelwordapp.php
      img/portfolio/th/enelwordapp-thgrid.png
      Interactive led wall live background running during the presentation event of the new Enel identity. -->

      <!-- a22 -->
      <!-- grid-item interaction dataviz
      andrea-portfolio-a22.php
      img/portfolio/th/a22-thgrid.jpg
      Interactive map plus eleven sections featuring text, videos and interactive visualizations. -->

      <!-- Cotoni animati -->
      <div class="grid-item interaction identity print">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-cotonianimati.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/cotonianimati-thgrid2.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/cotonianimati-thgrid2.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-cotonianimati.php" class="tile-title"><h3><?=$cotonianimati[$lingua]?></h3></a>
            <p class="space-bottom">Visual and music live show where the interactive projections follow both power and rhythm of music.</p>
          </div>
        </div>
      </div>

      <!-- OMC -->
      <!-- grid-item identity print
      andrea-portfolio-omc.php
      img/portfolio/th/omc-thgrid2.jpg
      Dynamic visual identity and website for OMC, a company operating in the manufacture of high precision mechanical parts on order. -->

      <!-- Monti Aurunci -->
      <div class="grid-item print identity">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-montiaurunci.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/montiaurunci-thgrid2.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/montiaurunci-thgrid2.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-montiaurunci.php" class="tile-title"><h3><?=$montiaurunci[$lingua]?></h3></a>
            <p class="space-bottom">Visual identity and graphic design of the visitor centre of the Monti Aurunci Park, from concept to print.</p>
          </div>
        </div>
      </div>

      <!-- Archichef -->
      <div class="grid-item print dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-archichef.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/archichef-thgrid.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/archichef-thgrid.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-archichef.php" class="tile-title"><h3><?=$archichef[$lingua]?></h3></a>
            <p class="space-bottom">Infographic representation of recipes, visualizing the process mixing visual aesthetic and information.</p>
          </div>
        </div>
      </div>

      <!-- Casa dell'acqua -->
      <div class="grid-item identity print dataviz">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-casadellacqua.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/casadellacqua-thgrid2.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/casadellacqua-thgrid2.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-casadellacqua.php" class="tile-title"><h3><?=$casadellacqua[$lingua]?></h3></a>
            <p class="space-bottom">Visual identity and graphic design of the exhibition set up in the public swimming-pool of Bari.</p>
          </div>
        </div>
      </div>

      <!-- Dolomiti hydrotour -->
      <!-- grid-item print identity dataviz
      andrea-portfolio-dolomitienergia.php
      img/portfolio/th/dolomitienergia-thgrid.jpg
      Visual identity and graphic design of the exhibition set up in the hydroelectric plant of Santa Massenza (Tn). -->

      <!-- Museo geologia -->
      <!-- grid-item interaction
      andrea-portfolio-museogeologia.php
      img/portfolio/th/museogeologia-thgrid.jpg
      5 multimedia interactive exhibits showing the geological history of five important Dolomitic groups. -->

      <!-- Magma -->
      <div class="grid-item print identity">
        <div class="tile">
          <div class="tile-thumb">
            <div class="overlay">
              <div class="btns">
                <a href="andrea-portfolio-magma.php"><i class="pe-7s-link"></i></a>
              </div>
            </div>
            <!-- <img src="img/portfolio/th/magma-thgrid2.jpg" alt="Thumbnail"> -->
            <img src="img/portfolio/th/lazy-thgrid.jpg" data-src="img/portfolio/th/magma-thgrid2.jpg" class="lazyload" alt="">
          </div>
          <div class="tile-body">
            <a href="andrea-portfolio-magma.php" class="tile-title"><h3><?=$magma[$lingua]?></h3></a>
            <p class="space-bottom">Short guide, exhibition catalogue, flyer and website design for Follonica's MAGMA museum.</p>
          </div>
        </div>
      </div>


    </div><!-- Portfolio Grid End -->

    <!-- Load More Button -->
    <!-- <div class="text-center">
      <a href="#" class="btn btn-ghost btn-primary btn-sm icon-left">
        <i class="pe-7s-refresh"></i>
        Load More Portfolio
      </a>
    </div> -->

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
  <script src="js/plugins/isotope.pkgd.min.js"></script>
  <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>

</body><!-- Body End -->

</html>
