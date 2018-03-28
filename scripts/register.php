<?php
/*This is going to be run when the user has clicked submit on the register page. There is MINIMAL securtiy measures. */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";

try {
    $rpassword = $_POST['register-password'];
    $rfname = $_POST['register-fname'];
    $rlname = $_POST['register-lname'];
    $rcity = $_POST['register-city'];
    $rStName = $_POST['register-streetname'];
    $rStNum = $_POST['register-streetnum'];
    $rState = $_POST['register-state'];
    $rzip = $_POST['register-zip'];
    $rphone = $_POST['register-phone'];
    $remail = $_POST['register-email'];
    $rcard = $_POST['register-card'];
    $rexp = $_POST['register-expiration'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*The account number shouldnt be the primary key, the email should be. */
    $sql = "INSERT INTO Users 
    VALUES(DEFAULT, FALSE, '$rpassword', '$rfname','$rlname','$rStName',$rStNum,'$rcity','$rState', '$rzip', '$rphone','$remail', $rcard , '$rexp');";
    /*echo $sql; done for testing purposes */
    /*VAVLUES(Account no, isAdmin, password, fname, lname, str name, str num, city, state, zip, phone, email, card num, card expir)*/
    $conn->exec($sql);
    echo "The insert has been complete";
    }
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

?>
