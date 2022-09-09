<?php 
    date_default_timezone_set('Europe/Paris');
    $host='localhost';
    $port=3306;
    $dbname='station_supervisor';
    $user='root';
    $pwd='';
    $date = date("Y-m-d H:i:s");
   

    try{
        $newBD= new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd);
        echo "Connexion etablie";
    } catch(PDOException $e){
        die('Erreur de connexion :'.$e->getMessage());
    }

    if(isset($_POST['fake-field']) && $_POST['fake-field'] != ''){
       echo '<p>Une erreur est survenue</p>';
    } elseif (isset($_POST["prenom"])&&
        isset($_POST["nom"])&&
        isset($_POST["mail"])&&
        isset($_POST["com"])){
            $insertion=$newBD->prepare("INSERT INTO contact VALUES(NULL,:prenom,:nom,:mail,:com,:datet)");
            $insertion->bindValue(":prenom",$_POST["prenom"]);
            $insertion->bindValue(":nom",$_POST["nom"]);
            $insertion->bindValue(":mail",$_POST["mail"]);
            $insertion->bindValue(":com",$_POST["com"]);
            $insertion->bindValue(":datet",$date);
            $verification= $insertion->execute();
            if ($verification){
                echo"réussite";
            }else{
                echo "fail";
            }
        
        }else {
            echo "Une variable bug";
        }

        header('Location:contact.html')

?>