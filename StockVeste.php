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
    <title>Stock Veste</title>
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
<span>
<?php
echo "Gestion du stock";?>
</span>

</header>

<div class="Hero">
<!--HeroBanner-->
</div>



<h1>PRODUITS EN STOCK</h1>

<?php
$host = 'localhost'; // Remplacez par votre hôte
$db = 'motoaccess'; // Remplacez par le nom de votre base de données
$user = 'root'; // Remplacez par votre nom d'utilisateur
$pass = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
}
?>


<?php
$sql = "SELECT * FROM tabveste"; // Remplacez par votre requête SQL
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="Tabaff">
<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Designation</th>
            <th>Matiere</th>
            <th>Quantite</th>
            <!-- Ajoutez d'autres en-têtes si nécessaire -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $row): ?>
            
            <tr>
               
                <td><?php echo htmlspecialchars($row['DesignationVeste']); ?></td>
                <td><?php echo htmlspecialchars($row['MatiereVeste']); ?></td>
                <td><?php echo htmlspecialchars($row['QuantiteVeste']); ?></td>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
       
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<!--
<div class="Tableau">
<table id="MaTable" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
        -->
<div class="Nvx" ><a href="NouveauxCasque.php"><button>AJouter nouveau</a></button></div>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!--DatatTable-->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
        let table = new DataTable('#MaTable');
    </script>
</body>
</html>