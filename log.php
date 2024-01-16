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
  }else echo"verifier bien votre nom ou votre mot de passe";
 

}else echo"veuillez remplir toute le champ";
}

?>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<Script src="jquery.min.js"></Script>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:red;">
  GESTION  
</nav>
<p class ="text-muted  text-center mb-4">Bienvenue Dans le page de l'administrateur</p>
<div class="container">
    <form action="login.php" method="post">
        <label for="form-label">Name :</label>
        <input type="text"class="form-control"  name="nom" placeholder="NOM">
        <br> <br>
        <label for="form-label">password</label>
        <input type="password"class="form-control" name="mdp" placeholder="MOT DE PASSE ">
        <br> <br>
       <div>
          <button type="submit"class="btn btn-success" name="submit">connecter</button> <br> <br>
          <a href="index.php" class="btn btn-danger">Deconnecter</a>
      </div>
    </form>
</div>
  

