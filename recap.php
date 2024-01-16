
<?php
include "dbconnect.php";
$conn->set_charset("utf8");
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
<!-- Ajouter ces liens CDN dans la section head de votre page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.7/jspdf.plugin.autotable.min.js"></script>
<div class="container-fluid">
    <h3 class="text-dark mb-4"></h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Recaputulation</p>
        </div>
        
    <table class="table">
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
           $conn->set_charset("utf8");
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
                <button class="btn btn-primary" onclick="generateCertificate(this)">Certifier</button>
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
<script>
function generateCertificate(btn) {
    const studentData = btn.closest('tr').querySelectorAll('td');
    const nom = studentData[0].textContent;
    const theme = studentData[5].textContent;
    const encadreur = studentData[6].textContent;
    const durer = studentData[7].textContent;

    // Create PDF document
    const doc = new jsPDF();
    const columns = ['Nom', 'Thème', 'Encadreur'];
    const data = [[nom, theme, encadreur]];
    doc.autoTable({
        startY: 20,
       // head: columns,
       // body: data,
        styles: {
            font: 'Helvetica',
            fontSize: 12
        },
        encoding: "UTF-8"
    });
    // Contenu du certificat en français
    doc.setFont("Arial Unicode MS");

doc.text("Attestation de stage", 15, 15);
doc.setFontSize(15);
doc.text(`Je soussigne  ,${encadreur} certifie que: ${nom}`, 15, 25);

// Données du stagiaire
doc.setFontSize(12);
doc.text(`A effectue un stage de notre service  avec le theme " ${theme} " ` , 15, 35);
doc.text(`et ce durant de ${durer} : `, 15, 45);
doc.text("Ce present Attestation est delivree a l'interesse , sur sa demande,pour servir  et valoir ce que droit : " , 15, 55);


// Signature (optionnelle)
doc.text("Signature de l'établissement", 100, 75);
doc.text(" Fait a Toliara , le " + new Date().toLocaleDateString(), 100, 80);

    // Download the PDF
    doc.save(`certificat ${nom}.pdf`);
}
</script>

</body></html>