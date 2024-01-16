<?php 
session_start();
//si il click sur submit
if (isset($_POST["submit"])){
 
  //affectation na poste ho lasa variable
  $nom=$_POST["nom"];
  $mdp=$_POST["mdp"];
  //connexion a la base de donness
  if($nom&&$mdp){ 
  $serveur="localhost";
  $user="root";
  $password="";
  $dbname="stage";
  $connexion=new mysqli($serveur,$user,$password,$dbname);
  //verification de la connection
  if($connexion->connect_error){
    echo"connexion echoué";
  }
  //creer une requete
  $req="SELECT * FROM user WHERE nom='$nom' AND mdp='$mdp'";
  //verification de la requete
  $resultat=$connexion->query($req);
  if($resultat->num_rows==1){
    $_SESSION['nom']=$nom;
    header("Location:index.php");
  }else{
    echo("verifier bien votre nom ou votre mot de passe");
  }
  
 

}else echo"veuillez remplir toute le champ";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="icon" type="image/png" sizes="180x180" href="./assets/img/menu.png">
    <link rel="icon" type="image/png" sizes="180x180" href="/assets/img/menu.png">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="./assets/css/styles.min.css">
  </head>
  <body class="bg-gradient-primary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
          <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-6 d-none d-lg-flex">
                  <div class="flex-grow-1 bg-login-image" style="background-image: url(./assets/img/dogs/image3.jpeg)">
                </div>
              </div>
              <div class="col-lg-6"><div class="p-5">
                <div class="text-center">
                  <h4 class="text-dark mb-4">Se connecter</h4>
                </div>
<form action = "login.php" method="POST" class="user" >
  <div class="mb-3">
    <input class="form-control form-control-user" type="text" id="nom"  placeholder="Nom" name="nom" style="margin-bottom: 24px;">
  <input class="form-control form-control-user" type="password" id="mdp"  placeholder="Votre mot de passe" name="mdp" style="margin-bottom: 28px;"></div>
  <div class="mb-3">

  </div>
  <button class="btn btn-primary"  name ="submit" style="background: rgb(234,26,26);margin-left: 117px;">Se Connecter</button>
<br>  <br>
<div class="text-center"><a class="small" href="register.php"> S'inscrire</a></div>
  <div class="mb-3"><div class="custom-control custom-checkbox small"></div></div><hr><hr></form><div class="text-center"></div><div class="text-center"></div></div></div></div></div></div></div></div></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="./assets/js/script.min.js"></script></body></html>