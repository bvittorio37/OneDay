

<div class="row">
       
       <div class="col-md-10 offset-10">

    <form class="" action="http://localhost/ETU1340_ETU1233/produit/AjoutProduit/listeproduit.php" method="get" enctype="multipart/form-data" >
      <label for="validationTextarea">Nouveau plat</label>
    <input type="text" name="nom" class="form-control" placeholder="nom"  >
    <input type="number" name="prix" class="form-control" placeholder="prix" >

    <div class="form-group">
    <select class="form-control" name="categorie" id="inputGroupSelect01">
      <option value="">selectionner un categorie</option>
     
      <?php foreach($rowsCategorie as $tableau){?>
      <option value=<?php echo $tableau['idCategorie']; ?> ><?php echo $tableau['Categorie']; ?></option>
     <?php } ?>
    </select>
    </div>
    <br/>
    <input type="submit" class="btn btn-primary" value="Valider" />
    <br/>
    </form>

  
            <div class="col-md-1">
                
            </div>
</div>
