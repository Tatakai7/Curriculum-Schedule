<head>
    <link rel="stylesheet" href="css/home.css">
</head>

<?php

    if (!isset($_SESSION['login_user'])) {
        echo '<center><img id="hlogo" src="imgs/logo/logo1.jpg" alt="logo"></center>';
    }
    elseif($_SESSION['login_user']=="admin"){
        include "inc/admin.php";
    }
?>