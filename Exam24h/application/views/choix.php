<div class="input-group mb-3">
  <div class="input-group-prepend">
    <form action="http://localhost/TD_IHM_SI_CI/Caisse/saisieAchat/Achat.php" >
    <button class="btn btn-outline-secondary" type="submit">Button</button>
  </div>
  <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected>Choose...</option>
    <?php foreach($rows as $row){?>
    <option value=<?php echo $row['Numero'];?>><?php echo $row['Numero'];?></option>
    <?php }?>
  </select>
  </form>
</div>

     
  
  

