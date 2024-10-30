<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $db = new mysqli("localhost", "root","","enrollment");

        $sql = "DELETE FROM students WHERE id=$id";
		$result = $db->query($sql);
        if($result){
            header("location: ../index.php?pg=db");
        }
    }
?>