
<div class="col-md-10  " style="text-align:center;border-left:1px solid black;" >
	<div class="row">
	</div>
	<div class="row">
	
	<?php foreach($rowsProduit as $tableau){ ?>
		<div class="card " style="width: 18rem;margin-left:10px;margin-top:10px;background-image:url(png/fond1.png)">
		   <img src="<?php echo img_loader($tableau['images']);?>" height="320px" width="300px" class="card-img-top" >
		  <div class="card-body">
			<h5 class="card-title"><?php echo $tableau['nom_produit']; ?></h5>
			<p class="card-text"><?php echo $tableau['prixUnitaire']; ?> Ar</p>
			<a href="http://localhost/Back/produit/redirectionModif/saisieModif.php/<?php echo $tableau['idProduits'];?> "><input type="button" value="Modifier" class="btn btn-primary"></a></p>
			<a href="http://localhost/Back/produit/deleteproduit/<?php echo $tableau['idProduits'];?>/listeproduit.php"><input type="button" value="Supprimer" class="btn btn-primary"></a></p>
			
		  </div>
		</div>
	<?php } ?>
	
	</div>
</div>
	



