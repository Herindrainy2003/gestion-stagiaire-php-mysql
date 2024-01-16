<?php
include "dbconnect.php";

// Requête SQL pour compter le nombre de stagiaires par filière
$result = $conn->query("SELECT niveau, COUNT(*) as total FROM stagiaire GROUP BY niveau");
$data = $result->fetch_all(MYSQLI_ASSOC);

// Fermez la connexion à la base de données
$conn->close();
?>
<canvas id="disque" width="4" height="2"></canvas>

<script>
// Récupérer les données PHP
var data = <?php echo json_encode($data); ?>;

// Préparer les données pour Chart.js
var labels = [];
var values = [];
var colors = ['rgba((0, 0, 255))', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 205, 86)', 'rgba(0, 255, 0)', 'rgba(0, 162, 0, 0.2)', 'rgba( 255, 0.2)', 'rgba(201, 203, 207, 0.2)'];

data.forEach(function (item, index) {
    labels.push(item.niveau);
    values.push(item.total);
});

// Obtenir le contexte du canvas
var ctx = document.getElementById('disque').getContext('2d');

// Créer un diagramme en secteurs (doughnut) avec Chart.js
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            label: 'Nombre total de stagiaires',
            data: values,
            backgroundColor: colors,
            borderColor: 'rgba(0, 255, 255)', // Couleur de bordure
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        legend: {
            display: true,
            position: 'top', // Vous pouvez ajuster la position selon vos préférences (top, bottom, left, right)
            labels: {
                fontColor: 'rgb(0, 0, 0)' // Couleur de la police de la légende
            }
        }
    }
});
</script>
