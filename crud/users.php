<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
		<meta name="description" content="A website">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<link rel="stylesheet" href="css/users.css">
		<script src="../ray2/js/jquery-3.6.3.min.js"></script>
		<script src="../ray2/js/sweetalert2.all.min.js"></script>
</head>
<body>

	<a href=""></a>
	<div id="db">
	<a id="insert" href="?pg=insert" role="button">Add New User</a>
	<table style="border-top: 1px black solid;">
		<thead>
			<tr>
				<th style='width: 100px'>USERNAME</th>
				<th style='width: 200px'>PASSWORD</th>
				<th>NAME</th>
				<th style='width: 100px'>SEX</th>
				<th>ALTER</th>
			</tr>
		</thead>
		<tbody>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . "../ray2/dbcon/connect.php";
			global $db;

			$sql = "SELECT * FROM students ORDER BY Lname ASC";
			$result = $db->query($sql);
				if($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						$toint = (int)$row['id'];
						echo'
							<tr>
								<td style="width: 200px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['uname'].'</td>
								<td style="width: 200px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['pass'].'</td>
								<td style="height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['Lname'].',&nbsp'.$row['Fname'].'</td>
								<td style="width: 100px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['Sex'].'</td>
								<td style="width: 200px; height: 50px; vertical-align: middle; text-align: center; padding-left: 5px">
									<a id="edit" href="?pg='.$toint.'">Update</a>  
									<a class="delete" href="../ray2/crud/delete.php?id='.$row['id'].'">Delete</a> 
								</td> 
							</tr>
						';
					}
				} else {
					echo "no record(s) found.";
				}
		?>
		</tbody>
	</table>
	</div>
	<script src="../ray2/js/con_del.js"></script>
</body>
