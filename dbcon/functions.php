<?php

    include $_SERVER['DOCUMENT_ROOT'] . "../ray2/dbcon/connect.php";

    function users_by_uname($uname){
        global $db;
        //$uname = $db->real_escape_string($uname);

        $sql = "SELECT * FROM `students` WHERE uname='$uname'";
        $result = $db->query($sql);
        $value = $result->fetch_assoc();

        return $value;
    }

    function admin_by_uname($uname){
        global $db;
        //$uname = $db->real_escape_string($uname);

        $sql = "SELECT * FROM `admin` WHERE id='$uname'";
        $result = $db->query($sql);
        $value = $result->fetch_assoc();

        return $value;
    }

    function check_count_admin($uname){
        global $db;

        $sql = "SELECT * FROM `admin` WHERE id='$uname'";
		$result = $db->query($sql);
		$count=mysqli_num_rows($result);

        if ($count > 0) {
            return true;
        }
    }

    function check_count_studs($uname){
        global $db;

        $sql = "SELECT * FROM students WHERE uname='$uname'";
		$result = $db->query($sql);
		$count=mysqli_num_rows($result);

        if ($count > 0) {
            return true;
        }
    }

    function check($uname, $errormsg) {
        global $db;

        $sql = "SELECT * FROM students WHERE uname='$uname'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $errormsg = "Make another Username!";
            return $errormsg;
        }
    }

    function insert($uname, $pass, $Fname, $Lname, $Sex) {
        global $db;

        $sql = "INSERT INTO students(uname, pass, Fname, Lname, Sex) 
        VALUES ('$uname', '$pass', '$Fname','$Lname','$Sex')";
        $result = $db->query($sql);

        if (!$result) {
            die("Error: " . $db->error);
        } else {
            return true;
        }

    }

    function dlt($id) {
        global $db;

        $sql = "DELETE FROM students WHERE id=$id";
		$result = $db->query($sql);

        if ($result) {
            return true;
        }
    }

    function users_by_id($strid){
        global $db;

        $sql = "SELECT * FROM students WHERE id=$strid";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();

        return $row;
    }

?>