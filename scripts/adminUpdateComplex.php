<?php
/* 
Adds or edits an existing Theater in the database.
Expects to have: 
$id = $_POST["complex-id"];
$streetName = $_POST["street-name"];
$streetNumber = $_POST["street-number"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$phone = $_POST["phone"];
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "theatertestingcopy";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $id = $_POST["complex-id"];
    $streetName = $_POST["street-name"];
    $streetNumber = $_POST["street-number"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $phone = $_POST["phone"];
    /*UPDATE `complex` SET `ID`=[value-1],`street_Name`=[value-2],`street_Number`=[value-3],`city`=[value-4],`state`=[value-5],`zip`=[value-6],`phone`=[value-7] WHERE 1*/
    $sql = "UPDATE `complex` SET `ID`= $id,`street_Name`= '$streetName',`street_Number`= $streetNumber,`city` = '$city',`state` = '$state', `zip` = '$zip', `phone` = $phone WHERE ID = $id;";
    /*echo $sql; for testing purposes */
    if($conn->exec($sql)){
        echo ("The Complex with the id: ");
        echo ($id);
        echo (" has been Updated"); 
    }
    else{
        echo("There was an error updating the complex.");
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>