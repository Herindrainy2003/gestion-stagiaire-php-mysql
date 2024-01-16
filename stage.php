<?php  include "header.php" ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"></h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Les Stage Disponibles</p>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Filiere</th>
                <th>Theme</th>
                <th>Durer</th>
                <th>Encadreur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
           include "dbconnect.php";
            $sql="SELECT * FROM stage";
            $resul=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($resul)) {
                ?>
                <tr>
                <td><?php echo $row['id_stage'] ?></td>
                <td><?php echo $row['filiere'] ?></td>
                <td><?php echo $row['theme'] ?></td>
                <td><?php echo $row['durer'] ?></td>
                <td><?php echo $row['encadreur'] ?></td>
                <td>
                   
                <a href="Modifierstage.php?id_stage=<?php echo $row ['id_stage']?>" class="link-dark"> Edit  </a>
                  
                <a href="deletestage.php?id_stage=<?php echo $row ['id_stage']?>" class="link-dark">delete</a>
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
            <span>Copyright © Mesupres 2024</span>
        </div>
    </div>
</footer>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top">
    <i class="fas fa-angle-up"></i></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="/assets/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script></body></html>