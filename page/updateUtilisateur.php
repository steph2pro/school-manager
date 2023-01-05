
<?php require_once('base/basecss.php'); ?>

<?php require_once('base/nav.php'); ?>
 <?php require_once('base/sidebar.php'); ?>
 <?php require_once('base/basejs.php'); ?>
 
<div class="col-lg-6"style="margin-left: 30em; margin-top:75px;">
<?php
    
 require 'config.php';

$id=$_GET['id'];
$sql='select * from utilisateurs where id=?';
$params=array($id);
$req=request($sql,$params);
//true parce quon veut recuperer une valeur
$result=recover($req,true);

    ?>
<div class="card">
  <div class="card-body">
    

    <!-- Vertical Form -->
    <form class="row g-3" action="scripts/update_u.php" method="POST">
      <div class="col-12">
        <input type="hidden" name="id" id="id" value="<?= $result -> id ?>" />
        <label for="inputnomsutilisateur" class="form-label">nom sutilisateur</label>
        <input type="text" class="form-control" id="inputnomsutilisateur" value="<?= $result -> nom ?>" name="nom" required>
      </div>

      <div class="col-12">
        <label for="inputlogin" class="form-label">login</label>
        <input type="text" class="form-control" id="inputlogin" name="login" value="<?= $result -> login ?>" required>
      </div>

      <div class="col-md-6">
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword5" value="<?= $result -> password ?>" name="pass" required>
      </div>
      <div class="col-12">
        <label for="inputstatut" class="form-label">statut</label>
        <input type="text" class="form-control" id="inpustatut" name="statut" value="<?= $result -> statut ?>" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" value="<?= $result -> adress ?>" required> 
      </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->


  </div>
</div>



















