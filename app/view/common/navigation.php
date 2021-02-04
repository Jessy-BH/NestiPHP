<nav class="navbar bg-info navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Nesti</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
        <li class = "nav-item <?= ( $loc =='recettes')?'active':''; ?> px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="http://<?=BASE_URL?>index.php?loc=recettes">Recettes</a>
          </li>
          <li class = "nav-item <?= ( $loc =='articles')?'active':''; ?> px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="http://<?=BASE_URL?>index.php?loc=articles">Articles</a>
          </li>
          <li class = "nav-item <?= ( $loc =='utilisateurs')?'active':''; ?> px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="http://<?=BASE_URL?>index.php?loc=utilisateurs">Utilisateurs</a>
          </li>
          <li class = "nav-item <?= ( $loc =='stats')?'active':''; ?> px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="http://<?=BASE_URL?>index.php?loc=stats">Statistiques</a>
          </li>
          <li class = "nav-item <?= ( $loc =='deco')?'active':''; ?> px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="http://<?=BASE_URL?>index.php?loc=deco">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
