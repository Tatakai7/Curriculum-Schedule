<?php
    
    $uname = "";
    $pass = "";
    $Fname = "";
    $Lname = "";
    $Sex = "";
    $errormsg = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $Sex = $_POST["Sex"];

            do{

                include '../ray2/dbcon/functions.php';

                $users = users_by_uname($uname);
                $check = check($uname, $errormsg);

                if($check) {
                    $errormsg = $check;

                    $uname="";
                    $pass = $_POST["pass"];
                    $Fname = $_POST["Fname"];
                    $Lname = $_POST["Lname"];
                    $Sex = $_POST["Sex"];
                    break;
                }

                insert($uname, $pass, $Fname, $Lname, $Sex);
    
                $_SESSION["uname"] = $uname;
                
                $_SESSION['logged_in']="yes";
                $_SESSION['student'] = 'yes';
                header("location: ?pg=profile");
            }while(false);
    }

?>

<head>
    <link rel="stylesheet" href="css/signup.css">
    <script src="../vimm/js/eye.js"></script>
</head>
<body>
<div class="fillupform">
    <h1><center>Sign <span>Up</span></center></h1>
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
            <a href="?pg=login" role="button" id="cancel">Cancel</a>
            <button type="submit" id="submit">Submit</button>
        </div>
    </form>
</div>
</body>