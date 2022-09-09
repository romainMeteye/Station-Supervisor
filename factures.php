<?php
session_start();
if(isset($_SESSION['ncompte'])){
    $username = $_SESSION['ncompte'];
}
else
{
    header("Location: connect.php");
}
?>


<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/factures.css" />

    <meta name="theme-color" content="#fafafa" />
  </head>

  <body id="factures">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-platine d-flex mt-4 mb-4">
       <button id="openBtn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img class="header-logo-res" src="img/logoBH.png" alt=""></a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-around w-100">
              <div class="d-flex justify-content-start align-items-center w-25">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Acceuil <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="presentation.html">Présentation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">Produit</a>
                </li>
              </div>
                <a class="navbar-brand" href="index.html"><img class="header-logo" src="img/logoBH.png" alt=""></a>
              <div class="d-flex justify-content-end align-items-center w-25">
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Langue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="connect.php">Connexion</a>
                </li>
              </div>
            </ul>
          </div>
        <div id="mySidenav" class="sidenav bg-platine">
          <a id="closeBtn" href="#" class="close">&times;</a>
          <ul>
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Acceuil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="presentation.html">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.html">Produit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Langue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connect.php">Connexion</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <h1 class=h1>Vos factures</h1>
<table>
    <tr>
        <td scope="row" class="tdtitle"><strong>ID</strong></td>
        <td class="tdtitle"><strong>Prénom</strong></td>
        <td class="tdtitle"><strong>Nom</strong></td>
        <td class="tdtitle"><strong>N° de client</strong></td>
        <td class="tdtitle"><strong>N° de facture</strong></td>
        <td class="tdtitle"><strong>Date facture</strong></td>
        <td class="tdtitle"><strong>Nbr abnt standard</strong></td>
        <td class="tdtitle"><strong>Nbr abnt premium</strong></td>
        <td class="tdtitle"><strong>Prix/u abnt standard</strong></td>
        <td class="tdtitle"><strong>Prix/u abnt premium</strong></td>
        <td class="tdtitle"><strong>Qté abnt total</strong></td>
        <td class="tdtitle"><strong>prix total</strong></td>
    </tr>

<?php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=station_supervisor', $user, $pass);
    foreach($dbh->query('SELECT * FROM `factures`') as $row) {
        $row = array_map("utf8_encode", $row);

        $id = $row['id'];
        $name = $row['f_prenom'];
        $lastname = $row['f_nom'];
        $nroclient = $row['f_nclient'];
        $nrofacture = $row['f_nfacture'];
        $fdate = $row['f_date'];
        $fstand = $row['f_standard'];
        $fprem = $row['f_premium'];
        $fprixstand = $row['f_prixunitairestand'];
        $fprixprem = $row['f_prixunitaireprem'];
        $fqty = $row['f_qty'];
        $fprixtot = $row['f_prixtotal'];
        echo "<tr> 
        <td scope='row'>$id</td>
        <td class='tddata'>$name</td>
        <td class='tddata'>$lastname</td>
        <td class='tddata'>$nroclient</td>
        <td class='tddata'>$nrofacture</td>
        <td class='tddata'>$fdate</td>
        <td class='tddata'>$fstand</td>
        <td class='tddata'>$fprem</td>
        <td class='tddata'>$fprixstand</td>
        <td class='tddata'>$fprixprem</td>
        <td class='tddata'>$fqty</td>
        <td class='tddata'>$fprixtot</td>
        </tr>";

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

<div id=logoutbutton>
    <a href="logout.php" id="logout">Cliquez ici pour vous déconnecter  <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>
</body>