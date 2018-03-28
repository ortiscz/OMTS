<?php
/* Expects POST data to include:
POST['email'] (and if users still have accountNumber as primary key, also POST['accountNumber']) 
This will represent the email of the user the admin wishes to delete.*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Check connection
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $accountNumber = $_POST['accountNumber'];
    /*SELECT * FROM `user` WHERE email = 'T.Szendrey@hotmail.com' and password = 'dfgkjn';*/
    $input = "DELETE FROM `user` WHERE email = '$email' and account_no = '$accountNumber';";
    // use exec() because no results are returned
    $conn->exec($input);
    echo "Record deleted successfully";
}

catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>