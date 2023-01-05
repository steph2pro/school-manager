<?php
  session_start();
  require 'scripts/conf.php';
  if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    $login=stripslashes($_REQUEST['login']);
    $password=stripslashes($_REQUEST['password']);
    $req=$db->prepare("select * from utilisateurs where login=? and password=?");
    $req->execute(array($login,$password));
    $result=$req->fetchAll(PDO::FETCH_OBJ);
    
    if ($req->rowCount()==1) {
      $_SESSION["nomutilisateur"]=$result->nom;
      header("location:accueil.php");
    } else {
      
      $_SESSION["error"]="les information enter sont partielement ou totalement incorrect";
    }
    


  }

?>
<?php require_once('base/basecss.php'); ?>

 <?php require_once('base/basejs.php'); ?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="#" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Login</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="login" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>
                    <div class="col-12">
                      <p class="small mb-0" style="color: red">

                        <?php 
        if (isset($_SESSION["error"])) {
          echo $_SESSION["error"];
          unset($_SESSION['error']);
        }
       ?>
                      </p>
                    </div>

            </div>
          </div>
        </div>

      </section>


    </div>
  </main><!-- End #main -->
