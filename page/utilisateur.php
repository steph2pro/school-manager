
<?php require_once('base/basecss.php'); ?>

<?php require_once('base/nav.php'); ?>
 <?php require_once('base/sidebar.php'); ?>
 <?php require_once('base/basejs.php'); ?>
 
<div class="col-lg-6"style="margin-left: 30em; margin-top:75px;">

<div class="card">
  <div class="card-body">
    

    <!-- Vertical Form -->
    <form class="row g-3" action="scripts/save_users.php" method="POST">
      <div class="col-12">
        <label for="inputnomsutilisateur" class="form-label">nom sutilisateur</label>
        <input type="text" class="form-control" id="inputnomsutilisateur" name="nom" required>
      </div>

      <div class="col-12">
        <label for="inputlogin" class="form-label">login</label>
        <input type="text" class="form-control" id="inputlogin" name="login" required>
      </div>

      <div class="col-md-6">
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword5" name="pass" required>
      </div>
      <div class="col-12">
        <label for="inputstatut" class="form-label">statut</label>
        <input type="text" class="form-control" id="inpustatut" name="statut" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" required> 
      </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->


  </div>
</div>



















