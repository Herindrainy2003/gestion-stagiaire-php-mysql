<?php include "header.php"; ?>
<?php
if(isset($_POST['update'])){
    $id_stage = $_GET['id_stage'];
include "dbconnect.php";
// Récupérer les données du formulaire
$filiere = $_POST['filiere'];
$theme = $_POST['theme'];
$durer = $_POST['durer'];
$encadreur = $_POST['encadreur'];

$quer ="UPDATE stage SET filiere='$filiere' ,theme='$theme' ,durer='$durer' ,encadreur='$encadreur'  WHERE id_stage=$id_stage ";

 mysqli_query($conn , $quer);
 header("Location:stage.php");
}

?>

<?php  include "header.php" ?>
<?php
include "dbconnect.php";

    $id_stage = $_GET['id_stage'];
    $query = "SELECT * FROM stage WHERE id_stage=$id_stage";
    $result = mysqli_query($conn , $query);
    $row=mysqli_fetch_assoc($result);

?>  
<div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;/assets/img/dogs/image3.jpeg?h=cbc3a40dae521ddee89bf6b026abde71&quot;);"></div><div class="p-5" style="text-align: center;"><div class="text-center"><h4 class="text-dark mb-4" style="margin-left: -221px;text-align: center;">Modifier Stage</h4></div>
<form action="Modifierstage.php?id_stage=<?php echo $_GET['id_stage']?>" method="POST" class="user">
    <div class="mb-3" style="text-align: center;">
    <input class="form-control form-control-user" type="text" id="filiere" aria-describedby="emailHelp" value= "<?php echo $row['filiere'] ?>" name="filiere" style="margin-bottom: 28px;margin-left: 169px;width: 400px;text-align: left;
    margin-left: 160px;padding-left: 23px;padding-right:163px;">
    <input class="form-control form-control-user" type="text" id="theme" aria-describedby="emailHelp" value= "<?php echo $row['theme'] ?>" name="theme" style="margin-bottom: 28px;width: 400px;margin-left: 169px;padding-right: 143px;padding-left: 19px;">
    <input class="form-control form-control-user" type="text" id="durer" aria-describedby="emailHelp" value= "<?php echo $row['durer'] ?>"  name="durer" style="width: 400px;margin-bottom: 28px;margin-left: 160px;padding-left: 23px;">
</div><div class="mb-3" style="text-align: center;">
<input class="form-control form-control-user" type="text" id="encadreur" value= "<?php echo $row['encadreur'] ?>" name="encadreur" style="width: 400px;margin-bottom: 28px;margin-left: 163px;">
</div>
<button class="btn btn-primary"  name="update" style="margin-right: 276px;margin-left: -14px;">Mettre a Jour</button>
<div class="mb-3">
    <div class="custom-control custom-checkbox small">

    </div></div><hr><hr></form><div class="text-center"></div><div class="text-center"></div></div></div><footer class="bg-white sticky-footer"><div class="container my-auto"><div class="text-center my-auto copyright"><span>Copyright © Brand 2024</span></div></div></footer></div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="/assets/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script></body></html>