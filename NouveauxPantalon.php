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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ajouter nouveau Pantalon</title>
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
        <a class="nav-link" href="#">Casque</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">veste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pantalon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bottes</a>
      </li>
     
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>
<?php
echo "hello";?>
</header>
<div class="Hero">


    <!--/////////////////connexion BDD/////////-->
<?php
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=motoaccess', $user, $pass);
    //Lorsque l'utilisateur a valider son formulaire
    if (isset($_POST['Ajoute'])) {
        $MarqueCasque = $_POST['MarquePantalon'];
        $DesignationCasque = $_POST['DesignationPantalon'];
        $MatiereCasque = $_POST['MatierePantalon'];
        $QuantiteCasque = $_POST['QuantitePantalon'];

        if (!empty($MarquePantalon) && !empty($DesignationPantalon) && !empty($MatierePantalon) && !empty($QuantitePantalon)) {
            //Preparation de la requête
            $requete = $db->prepare('INSERT INTO tabpantalon(MarquePantalon, DesignationPantalon, MatierePantalon, QuantitePantalon ) VALUES (:MarquePantalon, :DesignationPantalon, :MatierePantalon, :QuantitePantalon )');
            //Lier les parametre nommé, au contenu a insérer dans la table
            $requete->bindvalue(':MarquePantalon', $MarquePantalon);
            $requete->bindvalue(':DesignationPantalon', $DesignationPantalon);
            $requete->bindvalue(':MatierePantalon', $MatierePantalon);
            $requete->bindvalue(':QuantitePantalon', $QuantitePantalon);

            //Execution

            $result = $requete->execute();

            if (!$result) {
                echo "Un problème est survenue lors de l'enregistrement";
            } else {
                echo "Vous êtes bien enregistré. ID = " . $db->lastInsertId();
            }
        } else {
            echo "Tous les champs sont requis";
        }
    }

    ?>

</div>

<h1>AJOUTER UN PRODUIT PANTALON</h1>
    <div class="Formulaire">
    <form action="NouveauxPantalon.php" method="post">
 
  <div class="form-group">
    <label for="exampleInputEmail1">Marque</label>
    <input type="text" class="form-control" id="MarquePantalon" aria-describedby="" placeholder="Marque" name="MarquePantalon">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Designation</label>
    <input type="text" class="form-control" id="DesignationPantalon" aria-describedby="" placeholder="Désignation et références" name="DesignationPantalon">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Matière</label>
    <input type="text" class="form-control" id="MatierePantalon" aria-describedby="" placeholder="type de matière" name="MatierePantalon">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantité reçue</label>
    <input type="number" class="form-control" id="QuantitePantalon" aria-describedby="" placeholder="Quantité reçue" name="QuantitePantalon">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
 
  <button  id="btn" type="submit" class="btn btn-primary" name="Ajoute">Ajouter</button>
</form>
    </div>
    <?php
   
    $user = 'root';
    $pass = '';
    //Initialiser la connection avec la base de donnée
    $db = new PDO('mysql:host=localhost;dbname=motoaccess', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['']))
        echo 'Pas de connexion avec la base de donnée';
    ?>



<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!--DatatTable-->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

</body>
</html>