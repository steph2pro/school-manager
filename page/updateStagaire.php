
<?php require_once('base/basecss.php'); ?>

   <?php require_once('base/nav.php'); ?>
    <?php require_once('base/sidebar.php'); ?>
    <?php require_once('base/basejs.php'); ?>

    
<div class="col-lg-6"style="margin-left: 30em; margin-top:75px;">
    <?php
    
 require 'config.php';

$id=$_GET['id'];
$sql='select * from stagaires where id=?';
$params=array($id);
$req=request($sql,$params);
//true parce quon veut recuperer une valeur
$result=recover($req,true);

    ?>
<div class="card">
  <div class="card-body" >
    

    <!-- Vertical Form -->
    <form class="row g-3" action="scripts/update_s.php" method="POST">
      <div class="col-12">
        <input type="hidden" name="id" id="id" 
              value="<?= $result -> id ?>" />
        <label for="inputnomstagiaire" class="form-label">nom stagiaire</label>
        <input type="text" class="form-control" id="inputnomstagiaire" name="nom" value="<?= $result -> nom ?>" required>
      </div>
      <div class="col-12">
        <label for="inputdatenaissance" class="form-label">date naissance</label>
        <input type="date" class="form-control" id="inputdatenaissance" name="date" value="<?= $result -> date_naiss ?>" required>
      </div>
      <div class="col-12">
        <label for="inputlieudenaissance" class="form-label">lieu de naissance</label>
        <input type="text" class="form-control" id="inputlieudenaissance" name="lieu" value="<?= $result -> lieu_naiss ?>" required>
       </div>
      <div class="col-12">
        <label for="inputetablissement" class="form-label">etablissement</label>
        <input type="text" class="form-control" id="inputetablissement" name="etab" value="<?= $result -> etablissement ?>" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" value="<?= $result -> adress ?>" required>
      </div>
      <div class="col-12">
        <label for="inputfiliereformation" class="form-label">filiere formation</label>
        <input type="text" class="form-control" id="inputfiliereformation" name="filiere" value="<?= $result -> filiere ?>" required>
      </div>
      
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>










