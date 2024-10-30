<?php 

session_start();

$_SESSION['cap_code'] = "";

function GetCode() {
    
    $random = md5(rand());
    $cap_code = substr($random, 0, 6);
    $_SESSION['cap_code'] = $cap_code;
    $img = imagecreate(198, 48);
    imagecolorallocate($img, 31, 126, 156); 
    $txt_color = imagecolorallocate($img, 0, 0, 0);
    $font = "fonts/BRADHITC.ttf";

    imagettftext($img, 30, 0, 35, 40, $txt_color, $font, $cap_code);
    header("Content-type: image/png");
    imagepng($img);
    imagedestroy($img);
}

echo '<img src = "'.Getcode().'" />'
?>

