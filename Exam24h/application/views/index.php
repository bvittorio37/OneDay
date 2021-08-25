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
           <?php for ($a=0; $a<4 ; $a++){ ?>
             <a class="bn39 ml-4" href="/"><span class="bn39span">Button</span></a>
           <?php  } ?>
      </div>
      <div class=" col-md-12 mx-auto mt-4 content" >
        <div class=" row">
              <?php for($i=0; $i<6; $i++){ ?>
                    <div class="col-md-3 col-xm-8 ">
                        <div class="card mb-4">
                          <img src="<?php echo img_loader('biscuit','jpg'); ?>" class="card-img-top" alt="...">
                          <div class="card-body justify-content-center">
                          <h5 class="card-title text-center">Nom_poduit</h5>
                          <h6 class="card-subtitle mb-2 text-muted text-center">200 Ar</h6>
                          <p class="pl-3"><a href="#" class="btn ml-5"><i class="fas fa-link"></i> Visit Site</a></p>
              
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
