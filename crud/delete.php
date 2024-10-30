<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include '../dbcon/functions.php';

        $dlt = dlt($id);

        if($dlt){
            header("location: ../index.php?pg=users");
        }
    
    }
?>