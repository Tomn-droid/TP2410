<!-- création d'un site qui repertorie les accessoire de motard en stock
une page d'accueil : avec lien vers les catégories Casque, veste, pantalon, bottes
4 pages d'affichage dédiées a chaque catégorie
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--DatTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="style.css">
    <title>Bienvenue sur Motoaccess</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Stockcasque.php">Casque</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="StockVeste.php">veste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="StockPantalon.php">Pantalon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="StokBotte.php">Bottes</a>
      </li>
     
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>
        <a href="NouveauxCasque.php">Nouveau Casque</a>
    </header>
    <div class="Hero">

    </div>
    <div class="Recherche">

    <label for="site-search">Recherche:</label>
   <input type="search" id="site-search" name="q" />

   <button>Rechercher</button>

  </div>
  <button type="button" class="btn btn-primary" data-mdb-ripple-init>
    <i class="fas fa-search"></i>
  </button>
</div>

    </div>
    <div class="Categories">
        <div  id="casqueimg" class="Cat">CASQUE</div>
        <div  id="vesteimg" class="Cat">VESTE</div>
        <div id="pantimg"  class="Cat">PANTALON</div>
        <div  id="bottesimg" class="Cat">BOTTES</div>
    </div>

    <footer>

    </footer>
    <script>
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
</script>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!--DatatTable-->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>



</body>
</html>