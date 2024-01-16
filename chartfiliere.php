<?php
include "dbconnect.php";

// Requête SQL pour compter le nombre de stagiaires par filière
$result = $conn->query("SELECT filiere, COUNT(*) as total FROM stagiaire GROUP BY filiere");
$data = $result->fetch_all(MYSQLI_ASSOC);

// Fermez la connexion à la base de données
$conn->close();
?>
<canvas id="histogramme" width="4" height="2"></canvas>

<script>
// Récupérer les données PHP
var data = <?php echo json_encode($data); ?>;

// Préparer les données pour Chart.js
var labels = [];
var values = [];

data.forEach(function (item) {
    labels.push(item.filiere);
    values.push(item.total);
});

// Obtenir le contexte du canvas
var ctx = document.getElementById('histogramme').getContext('2d');


// Créer un histogramme avec Chart.js
var myChart = new Chart(ctx, {
    type: 'bar', //bar 
    data: {
        labels: labels,
        datasets: [{
            label: 'Nombre total de stagiaires',
            data: values,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    legend: {
            display: true,
            position: 'top', // Vous pouvez ajuster la position selon vos préférences (top, bottom, left, right)
            labels: {
                fontColor: 'rgb(0, 0, 0)' // Couleur de la police de la légende
            }
        }

});

</script>
