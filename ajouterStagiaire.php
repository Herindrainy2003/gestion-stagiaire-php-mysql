<?php include "location.php"; ?>
<?php include "header.php" ?>
<!-- Start: Contact Form Basic --><section class="py-4 py-xl-5" style="font-size: 20px;text-shadow: 0px 0px rgb(121,123,135);">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card mb-5">
                <div class="card-body p-sm-5">
                    <h2 class="text-center mb-4">Ajout Stagaire</h2>
                    <form action="registrestagiaire.php" method="post">
                        <!-- Start: Success Example --><div class="mb-3">
                        <!-- Start: Nom --><input class="form-control" type="text" id="nom" name="nom" placeholder="Nom">
                        <!-- End: Nom --><input class="form-control" type="text" id="num" name="num" placeholder="Telephone" style="margin-top: 29px;margin-bottom: 17px;padding-bottom: 8px;">
                        <input class="form-control" type="text" id="mail" name="mail" placeholder="E-mail" style="padding-bottom: 13px;padding-top: 0px;margin-bottom: 1px;"></div><!-- End: Success Example --><!-- Start: Success Example -->
                        <div class="mb-3">
                            <input class="form-control" type="text" id="filiere" name="filiere" placeholder="Filiere">
                            <input class="form-control" type="text" id="niveau" name="niveau" placeholder="Niveau" style="margin-top: 29px;margin-bottom: 17px;padding-bottom: 8px;">
                            <input class="form-control" type="text" id="id_staage" name="id_stage" placeholder="ID Stage" style="padding-bottom: 13px;padding-top: 0px;margin-bottom: 1px;">
                        </div><!-- End: Success Example -->
                        <!-- Start: Error Example -->
                        <div class="mb-3">

                        </div><!-- End: Error Example -->
                        <div class="mb-3">

                        </div><div>
                            <button class="btn btn-primary d-block w-100" type="Ajouter">AJOUTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!-- End: Contact Form Basic --></div>
<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright">
            <span>Copyright © Brand 2024</span>
        </div></div>
    </footer></div><a class="border rounded d-inline scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up">
        </i></a></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267">

        </script>
        </body>
        </html>