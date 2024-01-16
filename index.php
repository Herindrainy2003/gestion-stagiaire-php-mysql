  <?php include "header.php" ?>
<?php  
include "dbconnect.php";
// Requête SQL pour obtenir le nombre total de stagiaires
$totalStagiairesResult = $conn->query("SELECT COUNT(*) as total_stagiaires FROM stagiaire");
$totalStagiaires = $totalStagiairesResult->fetch_assoc()['total_stagiaires'];

$totalencadreurResult = $conn->query("SELECT COUNT(*) as total_stagiaires FROM stagiaire");
$totalencadreur = $totalencadreurResult->fetch_assoc()['total_stagiaires'];
// Fermer la connexion à la base de données
$conn->close();
?>
<!-- Start: Pricing Centered --><div class="container py-4 py-xl-5"><div class="row gy-4 gy-xl-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-xl-flex align-items-xl-center" style="padding-left: 266px;padding-right: 0px;"><div class="col"><div class="card"><div class="card-body text-center p-4" style="background: rgb(88,92,103);font-size: 33px;"><h6 class="text-uppercase text-muted card-subtitle" style="--bs-body-color: #ff0c0c;color: rgb(242,12,12);margin-bottom: -2px;">staGIAIRE</h6><h4 class="display-4 fw-bold card-title"><?php echo $totalStagiaires; ?></h4></div><div class="card-footer p-4" style="background: rgb(174,187,225);"></div></div></div><div class="col"><div class="card border-primary border-2"><div class="card-body text-center p-4" style="background: rgb(88,92,103);margin-left: -2px;padding-left: 0px;margin-right: -1px;"><h6 class="text-uppercase text-muted card-subtitle">encadreur</h6><h4 class="display-4 fw-bold card-title"><?php echo $totalencadreur; ?></h4></div><div class="card-footer p-4" style="background: rgb(174,187,225);"><div></div></div></div></div></div></div><!-- End: Pricing Centered --><div class="container-fluid"><div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
<!-- Start: Chart --><div class="row">
    <div class="col-lg-7 col-xl-8">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary fw-bold m-0">Statistique par filiere</h6>
                <div class="dropdown no-arrow">
                    <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        <i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p>
                            <a class="dropdown-item" href="#">&nbsp;Action</a>
                            <a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <?php include "chartfiliere.php" ?>

                    </div></div></div></div>
                    <div class="col-lg-5 col-xl-4"><div class="card shadow mb-4"><div class="card-header d-flex justify-content-between align-items-center"><h6 class="text-primary fw-bold m-0">Revenue Sources</h6><div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button><div class="dropdown-menu shadow dropdown-menu-end animated--fade-in"><p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a></div></div></div><div class="card-body"><div class="chart-area">
                    <?php include "chartniveau.php"  ?>        
                </div></div></div></div></div><!-- End: Chart --></div></div><footer class="bg-white sticky-footer"><div class="container my-auto"><div class="text-center my-auto copyright"><span>Copyright © Brand 2024</span></div></div></footer></div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script><script src="./assets/js/script.min.js"></script></body></html>