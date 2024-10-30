<?php
// Start the session
session_start();

$type = "";

?>

<!DOCTYPE html> 
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="description" content="A website">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<title>MONDEX</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	
	
	<body style="background-image: url('./imgs/bgs/japan2.jpg'); background-repeat: no-repeat; background-attachment: relative; background-size: cover;">
		<div id="header">
			<?php
				include "inc/header.php"
			?>
		</div>
		<div class="menu">
			<ul>
				<li><a href="?pg=home">Home</a></li>
				<li><a href="?pg=curri">Curriculum</a></li>
				<li><a href="?pg=sched">Schedule</a></li>
				<?php
					if(!isset($_SESSION['admin']))
					{
					  echo '';
					} else {
					  echo '<li><a href="?pg=users">Users</a><br/></li>';
					}

					if (!isset($_SESSION['student'])){
						echo '';
					} else {
					 	echo '<li><a href="?pg=profile">Profile</a><br/></li>';
					}
				?>
				<li>
					<?php
					if(!isset($_SESSION['logged_in']))
					  {
						echo '<a href="?pg=login">Login</a><br/>';
					  } else {
						echo '<a href="?pg=logout">Logout</a><br/>';
					  }
					?>
				</li>
				
			</ul>
		</div>
		<div id="content">
			<?php

				$intpg="";

				if (!isset ($_GET['pg'])) {
					$pg = "home";
				} else {
					$pg = $_GET['pg'];
					if($pg>0) {
						$intpg=$pg;
					}
				}
					
				if (!isset($_SESSION['logged_in'])) {
					switch ($pg) {
						case "home":
							include "inc/home.php";
							break;
						case "signup":
							include "inc/signup.php";
							break;
						default:
							include "inc/login.php";
							break;
					} 
				} else {

					switch ($pg) {
						case 'home':
							include 'inc/home.php';
							break;
						case 'curri':
							include 'curriculum/curri.php';
							break;
                        case 'sched':
							include 'schedule/sched.php';
							break;							
						case 'login':
							include 'inc/login.php';
							break;
						case 'logout':
							include 'inc/logout.php';
							break;
						case "home":
							include "inc/home.php";
							break;
						case "profile":
							include "inc/profile.php";
							break;
						case "users":
							include "crud/users.php";
							break;
						case "insert":
							include "crud/insert.php";
							break;
						case "$intpg":
							include "crud/update.php";
						}
				}
			?>
		</div>
		<div id="footer">
			<?php
				include "inc/footer.php"
			?>
		</div>
	</div>
		
	</body>

</html> 