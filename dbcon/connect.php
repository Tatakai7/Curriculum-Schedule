<?php
	$db = new mysqli("localhost", "root","","enrollment");
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
?>