<?php
// Start the session
	$error ='';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['error_msg'])){
	$error = $_SESSION['error_msg'];
}

?>
  <head>
    <link rel="stylesheet" href="css/login.css">
    <script src="../vimm2/js/eye.js"></script>
  </head>
   <div class="login">
      <div id="title">
        <p><span>Login</span>&nbsp;</p>
        <a href="index.php?pg=signup" id="signup">Sign Up</a>
      </div>
      <form action="inc/check_login.php" method="post" class="inputs">
        <input type="text" required name="uname" class="box" placeholder="Username"/>
        <div id="pass">
          <input id="password" type="password" required name="password" class="box" placeholder="Password"/>
          <span onclick="EyeLog()">
            <img id="eye2" src="imgs/password/reveal.png" alt="reveal">
            <img id="eye1" src="imgs/password/hide.png" alt="hide">          
          </span>
        </div>
        <div id="captcha">
            <?php echo '<img src= "capcode.php"/>'; ?>
        </div>
        <input type="text" name="cap_code" required class="box" placeholder="Captcha"/>
        <div class="error"><?php echo $error; ?></div>
        <input type="submit" value=" Submit "/>
      </form>
   </div>
<?php
	$_SESSION['error_msg'] = '';
?>

