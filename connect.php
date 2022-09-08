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
    <link rel="stylesheet" href="css/connect.css" />

    <meta name="theme-color" content="#fafafa" />
  </head>

  <body>
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
                <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="connect.html">Connexion</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

<<<<<<< HEAD:connect.html
    <footer class="bg-platine-rev">
=======
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
            header("connect.php"); 
        }
    }

    if(isset($_POST['submit'])){
        $username = strtolower($_POST['ncompte']);
        $password = $_POST['password'];
        if($username === "admin" && $password === "admin")
        {
            $error = "";
            $_SESSION["ncompte"] = $username;
            header("Location: connect.php");
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
    <footer class="bg-gray">
>>>>>>> 003b60a09f741b81b47c1b4c26553fa43bd560f5:connect.php
      <article class="d-flex flex-row align-items-center footer-card">
        <a class="footer-logo" href="index.html"><img class="logo2" src="img/logoBV.png" alt=""></a>
        <div class="white-bar"></div>
        <section class="footer-block d-flex flex-column">
          <h6>Contact</h6>
          <div class="d-flex flex-column">
            <a class="link" href="#">Formulaire</a>
            <a class="link" href="https://www.instagram.com"><img class="footer-icone" src="img/insta bleu.png" alt=""></a>
            <a class="link" href="https://fr-fr.facebook.com"><img class="footer-icone" src="img/FB bleu .png" alt=""></a></a>
            <a class="link" href="https://fr.linkedin.com"><img class="footer-icone" src="img/linkedin-bleu.png" alt=""></a>
          </div>
        </section>
        <section class="footer-block d-flex flex-column">
          <h6>Présentation</h6>
          <div class="d-flex flex-column">
            <a class="link" href="presentation.html">Entreprise</a>
            <a class="link" href="#">Equipe</a>
          </div>
        </section>
        <section class="footer-block d-flex flex-column">
          <h6>Service</h6>
          <div class="d-flex flex-column">
            <a class="link" href="product.html">Présentation</a>
            <a class="link" href="#">Abonnement</a>
            <a class="link" href="#">Prestation</a>
          </div>
          </section>
        <section class="footer-block d-flex flex-column">
          <h6>Connexion</h6>
          <div class="d-flex flex-column">
            <a class="link" href="connect.php">Client</a>
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
