 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Stagiaires</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="stagaire.php">
          <i class="bi bi-circle"></i><span>ajouter</span>
        </a>
      </li>
      <li>
        <a href="stagaire_liste.php">
          <i class="bi bi-circle"></i><span>liste</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person"></i><span>Utilisateur</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="utilisateur.php">
          <i class="bi bi-circle"></i><span>ajouter</span>
        </a>
      </li>
      <li>
        <a href="utilisateur_liste.php">
          <i class="bi bi-circle"></i><span>liste</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Entreprise</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="entreprise.php">
          <i class="bi bi-circle"></i><span>ajouter</span>
        </a>
      </li>
      <li>
        <a href="entreprise_liste.php">
          <i class="bi bi-circle"></i><span>liste</span>
        </a>
      </li>
    </ul>
  </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Personel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="personnel.php">
              <i class="bi bi-circle"></i><span>ajouter</span>
            </a>
          </li>
          <li>
            <a href="personel_liste.php">
              <i class="bi bi-circle"></i><span>liste</span>
            </a>
          </li>
         
        </ul>
      </li>

  <!-- End Components Nav -->

</ul>

</aside><!-- End Sidebar-->