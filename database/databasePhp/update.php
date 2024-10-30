<?php

    $db = new mysqli("localhost", "root","","enrollment");

    $ID = "";
    $Password = "";
    $Fname = "";
    $Lname = "";
    $Sex = "";
    $errormsg = "";
    $strid="";

    if (isset($_GET['pg'])){
        $strid = $_GET['pg'];
    }

    $sql = "SELECT * FROM students WHERE id=$strid";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    $ID = $row['id'];
    $Password = $row['pass'];
    $Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Sex = $row['Sex'];
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $ID = $_POST['ID'];
        $Password = $_POST['pass'];
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $Sex = $_POST["Sex"];

        $sql = "UPDATE students SET id='$ID', pass='$Password', Fname='$Fname', Lname='$Lname', Sex='$Sex' WHERE id='$strid'";
        $result = $db->query($sql);
        if($result) {
            header("location: ?pg=db");
        }

    } 
    
?>

<head>
    <link rel="stylesheet" href="css/insert.css">
</head>
<body>
<div class="fillupform">
    <h2>Update Student Data</h2>
    <form method="post" class="form">
        <div class="inputs">
            <div id="label">ID:</div>
            <div id="input"><input type="text" required name="ID" value="<?php echo $ID; ?>"></div>
        </div>
        <div class="inputs">
            <div id="label">Password:</div>
            <div id="input"><input type="text" required name="pass" value="<?php echo $Password; ?>"></div>
        </div>
        <div class="inputs">
            <div id="label">First Name:</div>
            <div id="input"><input type="text" required name="Fname" value="<?php echo $Fname; ?>" placeholder="'John'"></div>
        </div>
        <div class="inputs">
            <div id="label">Last Name:</div>
            <div id="input"><input type="text" required name="Lname" value="<?php echo $Lname; ?>" placeholder="'Doe'"></div>
        </div>
        <div class="inputs">
            <div id="label">Sex:</div>
            <div id="input"><input type="text" required name="Sex" value="<?php echo $Sex; ?>" placeholder="'Male' / 'Female'"></div>
        </div>
        <div class="buttons">
            <a href="?pg=db" role="button" id="cancel">Cancel</a>
            <button type="submit" id="submit">Update</button>
        </div>
    </form>
</div>
</body>