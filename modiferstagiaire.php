<?php include "location.php"; ?>
<?php
if(isset($_POST['update'])){
    $id = $_GET['id'];
include "dbconnect.php";
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$filiere = $_POST['filiere'];
$niveau = $_POST['niveau'];
$id_stage = $_POST['id_stage'];

$quer ="UPDATE stagiaire SET nom='$nom' ,num='$num' ,mail='$mail' ,filiere='$filiere' ,niveau='$niveau' , id_stage ='$id_stage' WHERE id=$id ";

 mysqli_query($conn , $quer);
 header("Location:stagiaire.php");
}

?>


<?php  include "header.php"  ?>
<?php
include "dbconnect.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM stagiaire WHERE id=$id";
    $result = mysqli_query($conn , $query);
    $row=mysqli_fetch_assoc($result)

?>

<!-- Start: Contact Form Basic -->
<section class="py-4 py-xl-5" style="font-size: 20px;text-shadow: 0px 0px rgb(121,123,135);">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card mb-5">
                <div class="card-body p-sm-5">
                    <h2 class="text-center mb-4">Modifier Stagaire</h2>
                    <form  action="modiferstagiaire.php?id=<?php echo $_GET['id']?>"   method="post" >
    <!-- Start: Success Example -->
    <div class="mb-3">
        <!-- Start: Nom -->
        <input class="form-control" type="text" id="nom" name="nom" value="<?php echo $row['nom']?>">
<!-- End: Nom -->
<input class="form-control" type="text" id="num" name="num" value="<?php echo $row['num']?>" style="margin-top: 29px;margin-bottom: 17px;padding-bottom: 8px;">
<input class="form-control" type="text" id="mail" name="mail" value="<?php echo $row['mail']?>" style="padding-bottom: 13px;padding-top: 0px;margin-bottom: 1px;">
</div>
<!-- End: Success Example -->
<!-- Start: Success Example -->
<div class="mb-3">
    <input class="form-control" type="text" id="filiere" name="filiere" value="<?php echo $row['filiere']?>">
    <input class="form-control" type="text" id="niveau" name="niveau" value="<?php echo $row['niveau']?>" style="margin-top: 29px;margin-bottom: 17px;padding-bottom: 8px;">
    <input class="form-control" type="text" id="id_staage" name="id_stage"value="<?php echo $row['id_stage']?>" style="padding-bottom: 13px;padding-top: 0px;margin-bottom: 1px;">
</div>
<!-- End: Success Example -->
<!-- Start: Error Example -->
<div class="mb-3">

</div><!-- End: Error Example -->
<div class="mb-3">

</div>
<div>
    <button class="btn btn-primary d-block w-100" type="submit" name = "update">Mettre a Jour</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section><!-- End: Contact Form Basic -->
</div>
<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright">
            <span>Copyright © Brand 2024</span>
        </div>
    </div>
</footer>
</div>
<a class="border rounded d-inline scroll-to-top" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

</script>
<script src="/assets/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script>
</body>
</html>