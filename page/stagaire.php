
<?php require_once('base/basecss.php'); ?>

   <?php require_once('base/nav.php'); ?>
    <?php require_once('base/sidebar.php'); ?>
    <?php require_once('base/basejs.php'); ?>
    
<div class="col-lg-6"style="margin-left: 30em; margin-top:75px;">

<div class="card">
  <div class="card-body" >
    

    <!-- Vertical Form -->
    <form class="row g-3" action="scripts/save_stagiaire.php" method="POST">
      <div class="col-12">
        <label for="inputnomstagiaire" class="form-label">nom stagiaire</label>
        <input type="text" class="form-control" id="inputnomstagiaire" name="nom" required>
      </div>
      <div class="col-12">
        <label for="inputdatenaissance" class="form-label">date naissance</label>
        <input type="date" class="form-control" id="inputdatenaissance" name="date" required>
      </div>
      <div class="col-12">
        <label for="inputlieudenaissance" class="form-label">lieu de naissance</label>
        <input type="text" class="form-control" id="inputlieudenaissance" name="lieu" required>
       </div>
      <div class="col-12">
        <label for="inputetablissement" class="form-label">etablissement</label>
        <input type="text" class="form-control" id="inputetablissement" name="etab" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" required>
      </div>
      <div class="col-12">
        <label for="inputfiliereformation" class="form-label">filiere formation</label>
        <input type="text" class="form-control" id="inputfiliereformation" name="filiere" required>
      </div>
      
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>










