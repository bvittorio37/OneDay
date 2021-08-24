<?php
$Acueil="Acceuil.php"
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href=<?php echo img_loader("apple-touch-icon","png");?> rel="apple-touch-icon">
  <link href="<?php echo img_loader("favicon.png","png");?> rel="icon">
  <meta name="author" content="Nghia Minh Luong">
  <meta name="keywords" content="Default Description">
  <meta name="description" content="Default keyword">
  <title>Sky - Homepage</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo css_loader('font-awesome.min'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('style'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('bootstrap.min'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('owl.carousel'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('fontawesome-stars'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('bootstrap-select.min'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('slick'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('magnific-popup'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('jquery-ui.min'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('settings'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('layers'); ?>" rel="stylesheet">
    <link href="<?php echo css_loader('navigation'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo css_loader('style1'); ?>" rel="stylesheet">

  <!-- Fonts-->
  <!-- link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet" -->

  <!-- Custom-->


  <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
  <!--WARNING: Respond.js doesn't work if you view the page via file://-->
  <!--[if lt IE 9]><script   <script <?php echo js_loader("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv")?> ></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->


  <div class="header--sidebar"></div>
  <header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
            <p>Analakely,5eme Arrondissement, Contact: 0345068721 - 0341275614</p>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
           
            <div class="header__actions"><a href="index.jsp?page=login.jsp">Se connecter en tant Administrateur</a>
               
            </div>
          </div>
        </div>
      </div>
         
    </div>

  </header>
  <div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0"
      data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
      data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Livraison </strong>:Services rapide et livraison gratuit </p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Promotion</strong>:Apres achat plus de 50000ar,un plat offert 
        </p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Contact</strong>: 0324864289,0345566174,0331296475
       </p>
    </div>
  </div>      
  
<?php include($Acueil);?>
 

   
       <!-- JS Library-->
  <script  type="text/javascript" <?php echo js_loader("jquery.min"); ?>></script>
  <script  type="text/javascript"<?php echo js_loader("bootstrap.min"); ?>></script>
  <script  type="text/javascript" <?php echo js_loader("jquery.barrating.min"); ?>></script>
  <script  type="text/javascript" <?php echo js_loader("owl.carousel.min.js"); ?>></script>
  <script <?php echo js_loader("revolution.extension.kenburn.min"); ?></script>
  <script <?php echo js_loader("revolution.extension.migration.min"); ?>></script>
  <!--script type="text/javascript" src="plugins/gmap3.min.js"></script-->
  <script <?php echo js_loader("imagesloaded.pkgd"); ?>></script>
  <script <?php echo js_loader("isotope.pkgd.min"); ?>></script>
  <script <?php echo js_loader("bootstrap-select.min"); ?>></script>
  <script <?php echo js_loader("jquery.matchHeight-min"); ?>></script>
  <script <?php echo js_loader("slick.min"); ?>></script>
  <script <?php echo js_loader("jquery.elevatezoom"); ?>></script>
  <script <?php echo js_loader("jquery.magnific-popup.min"); ?>></script>
  <script <?php echo js_loader("jquery-ui.min"); ?>></script>
  <script  <?php echo js_loader("https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"); ?>></script>
  <script  <?php echo js_loader("jquery.themepunch.tools.min"); ?>></script>
  <script  <?php echo js_loader("jquery.themepunch.revolution.min") ; ?>></script>
  <script  <?php echo js_loader("revolution.extension.video.min"); ?>></script>
  <script  <?php echo js_loader("revolution.extension.slideanims.min"); ?>></script>
  <script  <?php echo js_loader("revolution.extension.layeranimation.min"); ?>></script>
  <script <?php echo js_loader("revolution.extension.navigation.min"); ?>></script>
  <script <?php echo js_loader("revolution.extension.parallax.min"); ?>></script>
  <script  <?php echo js_loader("revolution.extension.actions.min"); ?>></script>
  <!-- Custom scripts-->
  <script <?php echo js_loader("main"); ?>></script>


</html>