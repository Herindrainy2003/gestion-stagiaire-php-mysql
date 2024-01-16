<?php
include "dbconnect.php";
// Récupérer les données des stagiaires depuis la base de données
$result = $conn->query("SELECT 
s.nom, 
s.num, 
s.mail, 
s.filiere AS filiere_stagiaire, 
s.niveau, 
st.theme, 
st.encadreur, 
st.durer
FROM 
stagiaire s
JOIN 
stage st ON s.id_stage = st.id_stage;
");

// Fermer la connexion à la base de données
$conn->close();
?>
<?php include "header.php" ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"></h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Recaputulation</p>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Numero</th>
                <th>Email</th>
                <th>Filiere</th>
                <th>Niveau</th>
                <th>Theme</th>
                <th>Encadreur</th>
                <th>Durer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
           include "dbconnect.php";
            $sql="SELECT 
            s.nom, 
            s.num, 
            s.mail, 
            s.filiere, 
            s.niveau, 
            st.theme, 
            st.encadreur, 
            st.durer
            FROM 
            stagiaire s
            JOIN 
            stage st ON s.id_stage = st.id_stage;";
            $resul=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($resul)) {
                ?>
                <tr>
              
                <td><?php echo $row['nom'] ?></td>
<td><?php echo $row['num'] ?></td>
<td><?php echo $row['mail'] ?></td>
<td><?php echo $row['filiere'] ?></td>
<td><?php echo $row['niveau'] ?></td>
<td><?php echo $row['theme'] ?></td>
<td><?php echo $row['encadreur'] ?></td>
<td><?php echo $row['durer'] ?></td>

                
                
                <td>
                <a href="editstage.php" class="link-dark">Certifier</i></a>
                </td>
            </tr>
            <?php
        } ?>
    </tbody>
</table>
</div>
</div>
<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright">
            <span>Copyright © Brand 2024</span>
        </div></div>
    </footer>
</div>
<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i>
</a></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="/assets/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script></body></html>