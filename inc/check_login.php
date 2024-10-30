<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 
	$uname=$_POST['uname']; 
	$pword=$_POST['password']; 
	$ccode=$_POST['cap_code'];

	include '../dbcon/functions.php';

	if($uname=="admin"){

		$row = admin_by_uname($uname);
		$count = check_count_admin($uname);

		if ($count) {
			if ($uname == $row['id'] && $pword == $row['pass'] && $ccode == $_SESSION['cap_code']) {
				$_SESSION['logged_in'] = 'yes';
				$_SESSION['admin'] = 'yes';
				header("location: ../index.php");
			} elseif ($pword != $row['pass']) {
				$_SESSION['error_msg'] = 'Incorrect Password!';
				header("location: ../index.php?pg=login");
			} elseif ($ccode != $_SESSION['cap_code']) {
				$_SESSION['error_msg'] = 'Incorrect Captcha!';
				header("location: ../index.php?pg=login");
			}
		}else{
			$_SESSION['error_msg'] = 'No Admin User Found!';
			header("location: ../index.php?pg=login");
		}
	}else{

		$row = users_by_uname($uname);
		$count = check_count_studs($uname);

		if ($count) {
			if ($uname == $row['uname'] && $pword == $row['pass'] && $ccode == $_SESSION['cap_code']) {
				$_SESSION['logged_in'] = 'yes';
				$_SESSION['student'] = 'yes';
				$_SESSION['uname'] = $uname;
				header("location: ../index.php?pg=home");
			} elseif ($pword != $row['pass']) {
				$_SESSION['error_msg'] = 'Incorrect Password!';
				header("location: ../index.php?pg=login");
			} elseif ($ccode != $_SESSION['cap_code']) {
				$_SESSION['error_msg'] = 'Incorrect Captcha!';
				header("location: ../index.php?pg=login");
			}
		}else{
			$_SESSION['error_msg'] = 'No Student User Found!';
			header("location: ../index.php?pg=login");
		}
	}
}
?>

