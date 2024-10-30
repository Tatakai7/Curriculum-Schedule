<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
		<meta name="description" content="A website">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<link rel="stylesheet" href="css/connect.css">
</head>
<body>


	<a href=""></a>
	<div id="db">
	<a id="insert" href="?pg=insert" role="button">Add New User</a>
	<table style="border-top: 1px black solid;">
		<thead>
			<tr>
				<th style='width: 100px'>ID</th>
				<th style='width: 200px'>PASSWORD</th>
				<th>NAME</th>
				<th style='width: 100px'>SEX</th>
				<th>ALTER</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$db = new mysqli("localhost", "root","","enrollment");
			$sql = "SELECT id, pass, Fname, Lname, Sex FROM students";
			$result = $db->query($sql);
				if($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						$toint = (int)$row['id'];
						echo'
							<tr>
								<td style="width: 100px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['id'].'</td>
								<td style="width: 200px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['pass'].'</td>
								<td style="height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['Lname'].',&nbsp'.$row['Fname'].'</td>
								<td style="width: 100px; height: 50px; vertical-align: bottom; padding-left: 5px">'.$row['Sex'].'</td>
								<td style="width: 200px; height: 50px; vertical-align: middle; text-align: center; padding-left: 5px">
									<a id="edit" href="?pg='.$toint.'">Update</a>  
									<a id="delete" href="../ray2/database/databasePhp/delete.php?id='.$row['id'].'">Delete</a> 
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
</body>
