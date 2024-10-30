<?php 

    $uname='';
    if(isset($_SESSION['uname'])){
        $uname=$_SESSION['uname'];
    }

    include '../ray2/dbcon/functions.php';

    $users = users_by_uname($uname);

    $uname = $users['uname'];
    $pass = $users['pass'];
    $Fname = $users['Fname'];
    $Lname = $users['Lname'];
    $Sex = $users['Sex'];

?>
<head>
    <link rel="stylesheet" href="css/profile.css">
    <script src="../vimm/js/eye.js"></script>
</head>
<body>
    <div id="container">
        <div id="info">
            <div id="label">Username:</div>
            <div id="value"><?php echo $uname; ?></div>
        </div>
        <div id="info">
            <div id="label">Password:</div>
            <div id="pass">
                <input id="password" type="password" name="pass" value="<?php echo $pass; ?>">
                <span onclick="EyeProf()">
                    <img id="eye2" src="imgs/password/reveal.png" alt="reveal">
                    <img id="eye1" src="imgs/password/hide.png" alt="hide">          
                </span>
            </div>
        </div>
        <div id="info">
            <div id="label">Last Name:</div>
            <div id="value"><?php echo $Lname; ?></div>
        </div>
        <div id="info">
            <div id="label">First Name:</div>
            <div id="value"><?php echo $Fname; ?></div>
        </div>
        <div id="info">
            <div id="label">Sex:</div>
            <div id="value"><?php echo $Sex; ?></div>
        </div>
    </div>
</body>