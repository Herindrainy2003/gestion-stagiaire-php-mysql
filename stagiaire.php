<?php include "location.php"; ?>
<?php include "header.php" ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"></h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Les Stagiaires</p>
        </div>
        <!-- Bouton Imprimer -->
<button id="imprimerBtn" class="btn btn-primary mt-3">Imprimer</button>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Numero</th>
                <th>Email</th>
                <th>Filiere</th>
                <th>Niveau</th>
                <th>ID Stage</th>
                <th>Actions</th>
            </tr>
        </thead>
       <?php
    include "dbconnect.php";
    $sql="SELECT * FROM stagiaire";
    $resul=mysqli_query($conn,$sql);
    
    while ($row=mysqli_fetch_assoc($resul)) {
        ?>
    <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nom'] ?></td>
                <td><?php echo $row['num'] ?></td>
                <td><?php echo $row['mail'] ?></td>
                <td><?php echo $row['filiere'] ?></td>
                <td><?php echo $row['niveau'] ?></td>
                <td><?php echo $row['id_stage'] ?></td>
                <td>
                   <a href="modiferstagiaire.php?id=<?php echo $row ['id']?>" class="link-dark"><i class="fas fa-pencil-alt"> </i></a>
                       <a href="deleteStagiaire.php?id=<?php echo $row ['id']?>" class="link-dark"><i class="fas fa-trash"></i></a>
                   </td>
    <?php
        } ?>
        
        <tbody>
            </tr>
            
        </tbody>
    </table>
</div>
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
<script src="/assets/js/script.min.js"></script>
<script>
document.getElementById("imprimerBtn").addEventListener("click", function() {
    var tableau = document.querySelector(".table-responsive");
    var pdf = new jsPDF();
    pdf.addHTML(tableau.outerHTML);
    pdf.save("tableau.pdf");
});
</script>


</body>
</html>