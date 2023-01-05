<?php 
session_start(); 
 require 'scripts/conf.php';
 ?>
<?php require_once('base/basecss.php'); ?>

<?php require_once('base/nav.php'); ?>
 <?php require_once('base/sidebar.php'); ?>
 <?php require_once('base/basejs.php'); ?>
 

<div class="col-lg-6"style="margin-left: 25em; margin-top:75px;"style="width: 100%">
	<div class="col-lg-6"style="width: 120%">
<?php

  if (isset($_SESSION['error'])) {
    // code...
    $error=$_SESSION['error'];
    echo '<script type="text/javascript">';
    echo 'alert("'.$error['message'].'")';
    echo "</script>";
    //fermeture de la session
    unset($_SESSION['error']);
  } 
  ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des stagaires</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped" style="width: 100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">login</th>
                    <th scope="col">mot de pass</th>
                    <th scope="col">statut</th>
                    <th scope="col">adress</th>
                    <th scope="col">option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require 'scripts/conf.php';
                  $sql="select * from utilisateurs order by id desc";
                  $req=$db->prepare($sql);
                  $req->execute();
                  $resultats=$req->fetchAll(PDO::FETCH_OBJ);
                  $i=0;
                  foreach ($resultats as $resultat):
                   $i++;

                    $update='updateUtilisateur.php?id='.$resultat->id;
                    $delete='scripts/delete_u.php?id='.$resultat->id;
                  ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $resultat->nom ?></td>
                    <td><?= $resultat->login ?></td>
                    <td><?= $resultat->password ?></td>
                    <td><?= $resultat->statut ?></td>
                    <td><?= $resultat->adress ?></td>                    <td>
                      <a href="<?= $update ?>" class="btn btn-primary">modifier</a>
              &nbsp;
              <a href="<?= $delete ?>" class="btn btn-secondary">suprimer</a>
              
                    </td>
                  </tr>
                  <?php 
                    endforeach;

                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
