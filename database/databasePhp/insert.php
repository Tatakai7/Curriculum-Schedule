<?php

    $db = new mysqli("localhost", "root","","enrollment");

    $id = "";
    $pass = "";
    $Fname = "";
    $Lname = "";
    $Sex = "";
    $errormsg = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST["id"];
        $pass = $_POST["pass"];
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $Sex = $_POST["Sex"];

            do{
                $qry = "SELECT * FROM students WHERE id = $id";
                $check = $db->query($qry);

                if(mysqli_num_rows($check)>0) {
                    $errormsg = "THE ID is Already Used";
                    
                    $id="";
                    $pass = $_POST["pass"];
                    $Fname = $_POST["Fname"];
                    $Lname = $_POST["Lname"];
                    $Sex = $_POST["Sex"];
                    break;
                }

                $sql = "INSERT INTO students(id, pass, Fname, Lname, Sex) 
                        VALUES ('$id', '$pass', '$Fname','$Lname','$Sex')";
                $result = $db->query($sql);
    
                $id="";
                $pass = "";
                $Fname = "";
                $Lname = "";
                $Sex = "";
    
                header("location: ?pg=db");
            }while(false);
    }
    
?>

<head>
    <link rel="stylesheet" href="css/insert.css">
</head>
<body>
<div class="fillupform">
    <h2>Insert New Student</h2>
    <form method="post" class="form">
        <div class="inputs">
            <div id="label">ID:</div>
            <div id="input"><input type="text" required name="id" value="<?php echo $id; ?>"></div>
        </div>
        <div id="error">
            <?php echo $errormsg ?>
        </div>
        <div class="inputs">
            <div id="label">Password:</div>
            <div id="input"><input type="text" required name="pass" value="<?php echo $pass; ?>"></div>
        </div>
        <div class="inputs">
            <div id="label">First Name:</div>
            <div id="input"><input type="text" required name="Fname" value="<?php echo $Fname; ?>" placeholder="'Jhon'"></div>
        </div>
        <div class="inputs">
            <div id="label">Last Name:</div>
            <div id="input"><input type="text" required name="Lname" value="<?php echo $Lname; ?>" placeholder="'Doe'"></div>
        </div>
        <div class="inputs">
            <div id="label">Sex:</div>
            <div id="input"><input type="text" maxlength="1" required name="Sex" value="<?php echo $Sex; ?>" placeholder="'M' / 'F'"></div>
        </div>
        <div class="buttons">
            <a href="?pg=db" role="button" id="cancel">Cancel</a>
            <button type="submit" id="submit">Submit</button>
        </div>
    </form>
</div>
</body>