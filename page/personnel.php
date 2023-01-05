
<?php require_once('base/basecss.php'); ?>

<?php require_once('base/nav.php'); ?>
 <?php require_once('base/sidebar.php'); ?>
 <?php require_once('base/basejs.php'); ?>
 
<div class="col-lg-6"style="margin-left: 30em; margin-top:75px;">

          <div class="card">
            <div class="card-body">
              

              <!-- Vertical Form -->
              <form class="row g-3" action="scripts/save_personnel.php" method="POST">
                <div class="col-12">
                  <label for="inputpersonnel" class="form-label">nom personnel</label>
                  <input type="text" class="form-control" id="inputpersonnel" name="nom" required>
                </div>
                <div class="col-12">
                  <label for="inputposte" class="form-label">poste</label>
                  <input type="texte" class="form-control" id="inputposte" name="poste" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" name="adress" required> 
                </div>
                <div class="col-12">
                  <label for="inputnumcni" class="form-label">numcni</label>
                  <input type="number" class="form-control" id="inputnumcni" name="numcni"  required>
                </div>
                
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>