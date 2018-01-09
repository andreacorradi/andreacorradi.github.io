<?
date_default_timezone_set("Europe/Rome");

if (!isset($no_session) || (isset($no_session) && $no_session != true))
{
  session_start();
 // ob_start();
}

// if (isset($_GET['lingua']))
	$_SESSION['lingua'] = $_GET['lingua'];

if (!isset($_SESSION['lingua']))
	$_SESSION['lingua'] = "en";

$lingua = $_SESSION['lingua'];


$titolo['it'][0] = "Home";
$titolo['it'][1] = "Profilo";
$titolo['it'][2] = "Lavori";
$titolo['it'][3] = "Contatti";
// $titolo['it'][4] = "Blog";

$menu['it'][0] = "Home";
$menu['it'][1] = "Profilo";
$menu['it'][2] = "Lavori";
$menu['it'][3] = "Contatti";
// $menu['it'][4] = "Blog";

$menu_link['it'][0] = "index.php";
$menu_link['it'][1] = "about.php";
$menu_link['it'][2] = "works.php";
$menu_link['it'][3] = "contacts.php";
// $menu_link['it'][4] = "blog.php";


$titolo['en'][0] = "Home";
$titolo['en'][1] = "About";
$titolo['en'][2] = "Works";
$titolo['en'][3] = "Contacts";
// $titolo['en'][4] = "Blog";

$menu['en'][0] = "Home";
$menu['en'][1] = "About";
$menu['en'][2] = "Works";
$menu['en'][3] = "Contacts";
// $menu['en'][4] = "Blog";

$menu_link['en'][0] = "index.php";
$menu_link['en'][1] = "about.php";
$menu_link['en'][2] = "works.php";
$menu_link['en'][3] = "contacts.php";
// $menu_link['en'][4] = "blog.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?=$titolo[$lingua][$sezione]?></title>

  <!--SEO Meta Tags-->
  <meta name="description" content="Andrea Corradi - visual, information and interaction design" />
  <meta name="keywords" content="design, development, data, data visualization, interaction, user experience, visual" />
  <meta name="author" content="Andrea Corradi" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">

  <!-- Vendor Styles -->
  <link href="css/vendor/magnific-popup.css" rel="stylesheet" media="screen">

  <? if ($sezione == 0) {?>
    <link href="revolution-slider/css/revolution-slider.css" rel="stylesheet" media="screen">
  <? }?>

  <!-- Vendor Styles -->
  <link href="masterslider/style/masterslider.css" rel="stylesheet" media="screen">
  <link href="css/vendor/ms-laptop-style.css" rel="stylesheet" media="screen">
  <link href="css/vendor/magnific-popup.css" rel="stylesheet" media="screen">

  <!-- All Theme Styles including Bootstrap, FontAwesome, etc. compiled from styles.less-->
  <link href="css/styles-source.css" rel="stylesheet" media="screen">
  <link href="css/custom.css" rel="stylesheet" media="screen">

  <!-- Preloader (Pace.js) -->
  <script src="js/plugins/pace.min.js"></script>

  <? if ($sezione == 3) {?>
    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
  <? }?>

  <!--Modernizr / Detectizr-->
  <script src="js/libs/modernizr.custom.js"></script>
  <script src="js/libs/detectizr.min.js"></script>
  <script src="js/lazysizes.min.js" async=""></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-36803887-1', 'auto');
    ga('send', 'pageview');
  </script>

</head>

<!-- Body -->
<!-- Add ".body-alt" class to <body> for alternative color option. -->
<body>

  <!-- Preloader -->
  <div class="preloader-bg"></div>
  <div class="preloader">
    <span></span>
  </div>

  <!-- Fake scrollbar (when open popups/modals) -->
  <div class="fake-scrollbar"></div>

  <!-- Search Modal -->
  <!-- <div class="modal fade" id="search-modal">
    <div class="modal-dialog">
      <div class="container">
        <form class="modal-form" id="search-form">
          <h3 class="modal-title space-bottom-2x">Search</h3>
          <div class="form-input">
            <input type="text" name="search_inpt" id="search_inpt" required>
            <label for="search_inpt">Type to search</label>
            <span class="error-label"></span>
            <span class="valid-label"></span>
          </div>
          <div class="space-top-2x clearfix">
            <button type="button" class="btn btn-round btn-ghost btn-danger pull-left" data-dismiss="modal"><i class="flaticon-cross37"></i></button>
            <button type="submit" class="btn btn-round btn-ghost btn-success pull-right"><i class="pe-7s-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div> -->

  <? if ($sezione == 0) {?>
  <!-- Ghost Header Wrapper -->
  <div class="ghost-header-wrapper">
  <? } ?>

  <!-- Top Bar -->
  <!-- The screen width at which topbar disappears can be controlled through the variable "@topbar-hidden" in less/variables.less -->
  <? if ($sezione == 0) {?>
  <div class="top-bar top-bar-dark">  <!-- top-bar-ghost-dark -->
  <? } else { ?>
  <div class="top-bar top-bar-dark">
  <? } ?>
    <div class="container">
      <div class="social-buttons">
        <a href="https://twitter.com/AndreaCorradi2" target="_blank" class="sb-twitter cbutton cbutton--effect"><i class="bi-twitter"></i></a>
        <a href="https://www.linkedin.com/in/andreacorradi2/" target="_blank" class="sb-linkedin"><i class="bi-linkedin"></i></a>
        <a href="https://github.com/andreacorradi" target="_blank" class="sb-github"><i class="bi-github"></i></a>
        <!-- <a href="#" class="sb-skype"><i class="bi-skype"></i></a> -->
      </div>

      <!-- Switchers -->
      <!-- <ul class="switchers">
    		<? if($lingua == "it") {?>
            <li><a href="#">Ita</a>
              <ul class="dropdown">
                <li><a href="?lingua=en">En</a></li>
              </ul>
            </li>
    		<? } else { ?>
            <li><a href="#">En</a>
              <ul class="dropdown">
                <li><a href="?lingua=it">Ita</a></li>
              </ul>
            </li>
    		<? } ?>
      </ul> -->

    </div>
  </div>

  <!-- Navbar -->
  <!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. You can also use modifier classes like: "navbar-dark", "navbar-ghost navbar-ghost-light", .navbar-ghost navbar-ghost-dark" to change navbar apperance. The screen width at which navbar collapses can be controlled through the variable "@nav-collapse" in less/variables.less -->
  <? if ($sezione == 0) {?>
  <header class="navbar navbar-ghost navbar-ghost-light navbar-sticky"> <!-- navbar-ghost navbar-ghost-dark -->
  <? } else { ?>
  <header class="navbar navbar-dark navbar-sticky">
  <? } ?>

    <div class="container">
      <!-- Logo icon width can be adjusted trough the variable '@logo-img-max-width' in less/variables.less. The logo width (icon + text) can be adjusted trough the variable '@logo-max-width' in less/variables.less. -->
      <a href="index.php" class="logo">
        <!-- <img src="img/logo/logo-007aff.png" alt="iTheme"> -->
        <span>Andrea Corradi</span>
      </a>

      <!-- Site Navigation -->
      <nav class="navbar-nav" id="site-menu">

        <!-- Mobile Tools (Visible only when navbar collapsed) -->
        <div class="mobile-navbar-tools">
          <!-- <div class="switchers">
            <div class="column">
              <a href="#" <?=$lingua=="it" ? "class=\"active\"" : "";?>>Ita</a>
              <a href="#" <?=$lingua=="en" ? "class=\"active\"" : "";?>>En</a>
            </div>
          </div> -->
          <div class="tools">
            <div class="column">
              <a href="https://twitter.com/AndreaCorradi2" class="sb-twitter cbutton cbutton--effect"><i class="bi-twitter"></i></a>
              <a href="https://www.linkedin.com/profile/view?id=AAIAAAzKXLEB9qbF2YcG0XXEBm6v0Cq2GC90q8s&trk=nav_responsive_tab_profile" class="sb-linkedin"><i class="bi-linkedin"></i></a>
              <!-- <a href="#" class="sb-github"><i class="bi-github"></i></a>
              <a href="#" class="sb-skype"><i class="bi-skype"></i></a> -->
            </div>
          </div>
        </div>

        <!-- Navigation -->
        <ul>
          <? for($n1=0; $n1<count($menu[$lingua]); $n1++)	 {?>
          <li <?=$n1 == $sezione ? "class=\"active\"" : ""?>><a href="<?=$menu_link[$lingua][$n1]?>"><?=$menu[$lingua][$n1]?></a></li>
          <?}?>
        </ul>

      </nav><!-- Site Navigation End -->

      <!-- Toolbar -->
      <nav class="navbar-tools">
        <ul>
          <!-- Navigation Toggle -->
          <li class="nav-toggle cbutton cbutton--effect">
            <a href="#" class="flaticon-list26" data-nav-target="#site-menu"></a>
          </li>
        </ul>
      </nav>

    </div>

  </header><!-- Navbar End -->

  <? if ($sezione == 0) {?>
  <!-- Ghost Header Wrapper -->
  </div>
  <? } ?>
