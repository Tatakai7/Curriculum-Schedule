<?php

    include '../ray2/dbcon/functions.php';
    
    $id = "";
    $uname = "";
    $pass = "";
    $Fname = "";
    $Lname = "";
    $Sex = "";
    $errormsg = "";
    $strid="";

    if (isset($_GET['pg'])){
        $strid = $_GET['pg'];
    }

    $row = users_by_id($strid);

    $id = $row['id'];
    $uname = $row['uname'];
    $pass = $row['pass'];
    $Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Sex = $row['Sex'];
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        dlt($id);

        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $Sex = $_POST["Sex"];

        do {
            $check = check($uname, $errormsg);

                if($check) {
                    $errormsg = "Make another Username!";
                    
                    $uname="";
                    $pass = $_POST["pass"];
                    $Fname = $_POST["Fname"];
                    $Lname = $_POST["Lname"];
                    $Sex = $_POST["Sex"];
                    break;
                }

            $result = insert($uname, $pass, $Fname, $Lname, $Sex);
            if($result) {
                header("location: ?pg=users");
            }        
        } while (false);

    } 
    
?>

<head>
    <link rel="stylesheet" href="css/update.css">
    <script src="../ray2/js/eye.js"></script>
</head>
<body>
<div class="fillupform">
    <h2>Update Student Data</h2>
    <form method="post" class="form">
        <div class="inputs">
            <div id="label">Username:</div>
            <div id="input"><input type="text" required name="uname" value="<?php echo $uname; ?>"></div>
        </div>
        <div id="error">
            <?php echo $errormsg ?>
        </div>
        <div class="inputs">
            <div id="label">Password:</div>
            <div id="input">
                <input id="password" type="password" required name="pass" value="<?php echo $pass; ?>">
                <span onclick="Eye()">
                    <img id="eye2" src="imgs/password/reveal.png" alt="reveal">
                    <img id="eye1" src="imgs/password/hide.png" alt="hide">          
                </span>
            </div>
        </div>
        <div class="inputs">
            <div id="label">First Name:</div>
            <div id="input"><input type="text" required name="Fname" value="<?php echo $Fname; ?>"></div>
        </div>
        <div class="inputs">
            <div id="label">Last Name:</div>
            <div id="input"><input type="text" required name="Lname" value="<?php echo $Lname; ?>"></div>
        </div>
        <div class="inputs">
            <div id="label">Sex:</div>
            <div id="input">
                <select name="Sex" required>
                    <option value=""></option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
        </div>
        <div class="buttons">
            <a href="?pg=users" role="button" id="cancel">Cancel</a>
            <button type="submit" id="submit">Update</button>
        </div>
    </form>
</div>
</body>