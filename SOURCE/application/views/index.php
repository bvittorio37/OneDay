<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>VemboMarket</title>
  <link href="<?php echo css_loader('bootstrap'); ?>" rel="stylesheet">
  <link href="<?php echo css_loader('acceuil'); ?>" rel="stylesheet">
</head>
<body>

<div class="container ">
  <div class="row">
      <div class="col-md-12 nav">
           
             <a class="btn btn-danger" href="http://localhost/ETU1340_ETU1233/produit/redirectionAdmin/indexAdmin.php"><span class="bn39span">Se connecter en tant que Administrateur</span></a>
          
      </div>
      <div class=" col-md-12 mx-auto mt-4 content" >
        <div class=" row">
              <?php foreach($rows as $tableau){ ?>
                    <div class="col-md-3 col-xm-8 ">
                        <div class="card mb-4">
                          <img src="<?php echo img_loader( $tableau['images'],'jpg'); ?>" class="card-img-top" alt="...">
                          <div class="card-body justify-content-center">
<<<<<<< HEAD:SOURCE/application/views/index.php
                          <h5 class="card-title text-center"><?php echo $tableau['nom_produit'];?></h5>
                          <h6 class="card-subtitle mb-2 text-muted text-center"><?php echo $tableau['prixUnitaire'];?> Ar</h6>
                          <p class="pl-3"><a href="http://localhost/ETU1340_ETU1233/traitement/index" class="btn ml-5"><i class="fas fa-link"></i> Ajouter Panier</a></p>
=======
                          <h5 class="card-title text-center">Nom_poduit</h5>
                          <h6 class="card-subtitle mb-2 text-muted text-center">200 Ar</h6>
                          <p class="pl-3"><a href="#" class="btn ml-5"><i class="fas fa-link"></i> Visit Site</a></p>
>>>>>>> e36379e03e7e8ee62516ead1dd2dfe7baa852637:Exam24h/application/views/index.php
              
                          </div>
                    </div>
                  </div> 
                <?php } ?>    
            </div>
          </div>
      </div>

  
</div>  
     
    
</div>
</div>
</body>
