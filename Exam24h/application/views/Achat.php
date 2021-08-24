<form action="http://localhost/TD_IHM_SI_CI/Caisse/Achat/Achat.php" >
<p>Produit<select class="form-control" name="produit"></p>
<option>Choisit</option>
<?php foreach($rows as $row){?>
  <option value=<?php echo $row['idProduits'];?>><?php echo $row['designation'];?></option>
<?php }?>
</select>
<br>
<p>Quantite</p>
<p><input type="text" name="quantite" /> </p>
<input type="submit" value="Valider" />
</form>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Produit</th>
      <th scope="col">Prix Unitaire</th>
      <th scope="col">Quantite</th>
      <th scope="col">Montant</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($rowsAchat as $row){?>
    <tr>
    
      <td><?php echo $row['designation'];?></td>
     
  
    <td><?php echo $row['prixUnitaire'];?></td>

    <td><?php echo $row['quantiter'];?></td>
     
  
    <td><?php echo $row['Montant'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>