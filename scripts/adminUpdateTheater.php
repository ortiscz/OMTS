<?php
/* 
Adds or edits an existing Theater in the database.
Expects to have: 
$id = $_POST["theater-id"];
$complex_id = $_POST["complex-id"];
$maxSeats = $_POST["theater-maxseats"];
$screen = $_POST["theater-screensize"];
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $id = $_POST["theater-id"];
    $complex_id = $_POST["complex-id"];
    $maxSeats = $_POST["theater-maxseats"];
    $screen = $_POST["theater-screensize"];
    /*INSERT INTO `movie`(ID, `director_id`, `production`, `title`, `duration`, `rating`, `synopsis`)`*/
    $sql = "UPDATE `theatre` SET `ID`= $id,`complex_ID`=$complex_id,`max_seats`= $maxSeats,`screen` = '$screen' WHERE ID = $id;";
    /*echo $sql; was done for testing */
    if($conn->exec($sql)){
        echo ("movie has been Updated"); 
    }
    else{
        echo("There was an error updating the movie.");
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>