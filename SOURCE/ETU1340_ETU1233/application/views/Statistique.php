
<?php $i=1;?>
<?php $a=1;?>
<?php $c=1;?>
<div class="col-md-10  " style="text-align:center;border-left:1px solid black;" >
	
<div class="row">
        
<div class="col-md-3  " style="text-align:center;border-left:1px solid black;" >
<h2>Les produit les plus vendue</h2>
<table class="table table-dark" width:100px >
  <thead>
    <tr>
      <th scope="col">classement</th>
      <th scope="col">Produit</th>
      <th scope="col">Categorie</th>
    
    </tr>
  </thead>
  <tbody>
    <?php foreach($rowsProduitB as $row){?>
    <tr>
      <td><?php echo $a++;?></td>
      <td><?php echo $row['nom_produit'] ;?></td>
      <td><?php echo $row['categorie'] ;?></td>
    </tr>
    <?php } ?> 
  </tbody>
</table>
</div>
<div class="col-md-3  " style="text-align:center;margin-left:95px ;" >
<h2>Les produit les plus vendue</h2>
<table class="table table-dark" width:100px >
  <thead>
    <tr>
      <th scope="col">classement</th>
      <th scope="col">Valeur Apporter</th>
      <th scope="col">Caisse</th>
    
    </tr>
  </thead>
  <tbody>
    <?php foreach($rowsCaisseB as $row){?>
    <tr>
      <td><?php echo $i++;?></td>
      <td><?php echo $row['valeurApporte'] ;?></td>
      <td><?php echo $row['caisse'] ;?></td>
    </tr>
    <?php } ?> 
  </tbody>
</table>
    </div>

<div class="col-md-4  " style="text-align:center ; margin-left:80px;" >
<h2>Les produit les plus vendue</h2>
<table class="table table-dark" width:300px >
  <thead>
    <tr>
      <th scope="col">classement</th>
      <th scope="col">Nom produit</th>
      <th scope="col">Montant</th>
      <th scope="col">Date d'achat</th>
    
    </tr>
  </thead>
  <tbody>
    <?php foreach($rowsRecentB as $row){?>
    <tr>
      <td><?php echo $c++;?></td>
      <td><?php echo $row['nom_produit'] ;?></td>
      <td><?php echo $row['montant'] ;?></td>
      <td><?php echo $row['datedeVente'] ;?></td>
    </tr>
    <?php } ?> 
  </tbody>
    </table>
    </div>
    </div>
</div>
