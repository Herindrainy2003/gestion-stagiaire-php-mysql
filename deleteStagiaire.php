<?php
include "dbconnect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($conn->query("DELETE FROM stagiaire WHERE id=$id")==TRUE){
        header("Location: stagiaire.php");
    }
}

?>