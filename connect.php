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
    <link rel="stylesheet" href="css/connect.css" />

    <meta name="theme-color" content="#fafafa" />
  </head>

  <body>
  <header class="d-flex flex-column align-items-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav d-flex mb-4">
       <button id="openBtn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""><img class="header-burger" src="img/menuburgerblanc.png" alt=""></span>
          </button>
          <a class="navbar-brand" href="index.html"><img class="header-logo-res" src="img/logoBH.png" alt=""></a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-around w-100">
              <div class="d-flex justify-content-start align-items-center w-25">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="index.html">Accueil <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="presentation.html">Présentation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="product.html">Produit</a>
                </li>
              </div>
                <a class="navbar-brand" href="index.html"><img class="header-logo" src="img/LOGOTCH.png" alt=""></a>
              <div class="d-flex justify-content-end align-items-center w-25">
                <li class="nav-item">
                  <a class="nav-link text-white" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Langues
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="frTranslator" href="#">Français</a>
                    <a class="dropdown-item" id="enTranslator" href="#">English</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="connect.php">Connexion</a>
                </li>
              </div>
            </ul>
          </div>
        <div id="mySidenav" class="sidenav bg-nav2">
          <a id="closeBtn" href="#" class="close">&times;</a>
          <ul>
            <li class="nav-item active">
              <a class="nav-link text-white" href="index.html">Accueil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="presentation.html">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="product.html">Produit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Langues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="connect.php">Connexion</a>
            </li>
          </ul>
        </div>
      </nav>
      <article class="header-box">
        <h3 class="mt-3">Station Supervisor</h3>
        <h5 class="mb-3">vous propose un service de bonne qualité</h5>
        <button class="mb-4"><div class="m-2">Découvrir notre service</div></button>
      </article>
    </header>

    <?php 
    date_default_timezone_set('Europe/Paris');
    $host='localhost';
    $port=3306;
    $dbname='station_supervisor';
    $user='root';
    $pwd='';
   

      $error = "";
      $success = "";
      session_start();
      if(isset($_SESSION['ncompte']))
    {
        if($_SESSION['ncompte'] === "admin")
        {
            header("Location: factures.php"); 
        }
    }

    if(isset($_POST['submit'])){
        $username = strtolower($_POST['ncompte']);
        $password = $_POST['password'];
        if($username === "admin" && $password === "admin")
        {
            $error = "";
            $_SESSION["ncompte"] = $username;
            header("Location: factures.php");
        }
        else
        {
            $error = "N° de compte ou mot de passe incorrect !";
        }
    }


?>

    <form action="" method="POST">
        <div class="login1" id="log">
            <h1>Connexion</h1>
            <div class="logtxt">
                <input type="text" placeholder="N° de compte" name="ncompte" value="" autocomplete="off">
            </div>
  
            <div class="logtxt">
                <input type="password" placeholder="Mot de passe" name="password" value="" autocomplete="off">
            </div>
  
            <input class="buttonlog1" type="submit" name="submit" value="Connexion">
            <p class="errormsg"><?php echo $error?></p>
        </div>
    </form>

    <footer class="bg-platine-rev">
      <article class="d-flex flex-row align-items-center footer-card">
        <a class="footer-logo" href="index.html"><img class="logo2" src="img/LOGOTCV.png" alt=""></a>
        <div class="white-bar"></div>
        <section class="footer-block d-flex flex-column">
          <h6 class="text-white">Contact</h6>
          <div class="d-flex flex-column">
            <a class="link text-white" href="#">Formulaire</a>
            <div class="d-flex flex-row icones">
              <a class="link" href="https://www.instagram.com"><img class="footer-icone" src="img/instavertglowdefou.png" alt=""></a>
              <a class="link" href="https://fr-fr.facebook.com"><img class="footer-icone" src="img/facebook.png" alt=""></a></a>
              <a class="link" href="https://fr.linkedin.com"><img class="footer-icone" src="img/linkedin.png" alt=""></a>
            </div>
          </div>
        </section>
        <section class="footer-block d-flex flex-column">
          <h6 class="text-white">Présentation</h6>
          <div class="d-flex flex-column">
            <a class="link text-white" href="presentation.html">Entreprise</a>
            <a class="link text-white" href="#">Equipe</a>
          </div>
        </section>
        <section class="footer-block d-flex flex-column">
          <h6 class="text-white">Service</h6>
          <div class="d-flex flex-column">
            <a class="link text-white" href="product.html">Présentation</a>
            <a class="link text-white" href="#">Abonnement</a>
            <a class="link text-white" href="#">Prestation</a>
          </div>
          </section>
        <section class="footer-block d-flex flex-column">
          <h6 class="text-white text-decoration-underline text-">Connexion</h6>
          <div class="d-flex flex-column">
            <a class="link text-white" href="connect.php">Client</a>
          </div>
        </section>
      </article>
    </footer>

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
