<?php
/* 
Add a movie to the database
Expects to have: 
$id = $_POST["showing-id"];

*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $id = $_POST["showing-id"];
    /*DELETE FROM `showing` WHERE ID = */
    $sql = "DELETE FROM `showing` WHERE ID = $id;";
    /*echo($sql); Testing purposes */
    if($conn->exec($sql)){
        echo ("Showing has been deleted"); 
    }
    else{
        echo("There was an error deleting the Showing");
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>