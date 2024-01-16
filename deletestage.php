<?php
include "dbconnect.php";
if(isset($_GET['id_stage'])){
    $id_stage = $_GET['id_stage'];
    if($conn->query("DELETE FROM stage WHERE id_stage=$id_stage")==TRUE){
        header("Location: stage.php");
    }
}

?>

