
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet">
  <link href="<?php echo css_loader("bootstrap.css");?>" rel="stylesheet" >
  
  <!-- Custom styles for this template -->
  <link href="<?php echo css_loader("shop-homepage"); ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Gestion du supermache</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      
      </div>
    </div>
  </nav>
<br>
  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">
		
					<div class="col-md-2 ">
					<a href="http://localhost/ETU1340_ETU1233/produit/redirectionAjout/saisieAjout.php" style="border-radius:30px" class="nav-link btn btn-outline-primary mb-2" >Ajout Produit</a>
          <a href="http://localhost/ETU1340_ETU1233/produit/redirectionState/Statistique.php" style="border-radius:30px" class="nav-link btn btn-outline-primary mb-2" >Les Statistiques</a>
          <a href="http://localhost/ETU1340_ETU1233/produit/redirectionliste/listeproduit.php" style="border-radius:30px" class="nav-link btn btn-outline-primary mb-2" >Liste Produit</a>
          <a href="http://localhost/ETU1340_ETU1233/produit/redirectionAjoutC/saisieCategorie.php" style="border-radius:30px" class="nav-link btn btn-outline-primary mb-2" >AjoutCategorie</a>
          <form class="ps-search--header" action="Search" method="get">
            <input style="border-radius:30px" class="nav-link btn btn-outline-primary mb-2" name="nom" type="text" placeholder="Chercher les plat">
            <button class="btn btn-primary" style="margin-left:60px;">chercher</button>
          </form>
					<a  href="http://localhost/ETU1340_ETU1233/traitement/Logout" class="nav-link btn btn-outline-success mt-2 mb-2" style="border-radius:30px" href="disconnect.php">Deconnecter</a>
				
				</div>
           <?php include $get ;?>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container" style="margin_bottom=500px";>
      
  
       
      
      <p class="m-0 text-center text-white" >Copyright &copy; Your Website 2020</p>
   
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=" <?php echo js_loader("jquery.min"); ?>"></script>
  <script src="<?php echo js_loader("bootstrap.bundle.min"); ?> "></script>

</body>

</html>
