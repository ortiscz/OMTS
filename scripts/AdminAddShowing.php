<?php
/* 
Add a movie to the database
Expects to have: 
$id = $_POST["showing-id"];
$movieID = $_POST["movie-id"];
$theaterID = $_POST["theater-id"];
$complexID = $_POST["complex-id"];
$sTime = $_POST["s-time"];

*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $id = $_POST["showing-id"];
    $movieID = $_POST["movie-id"];
    $theaterID = $_POST["theater-id"];
    $complexID = $_POST["complex-id"];
    $sTime = $_POST["s-time"];
    /*INSERT INTO `showing`(`ID`, `movie_id`, `theatre_id`, `complex_id`, `s_time`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])*/
    $sql = "INSERT INTO `showing` VALUES($id, $movieID, $theaterID, $complexID, $sTime);";
    /*echo($sql); Testing purposes */
    if($conn->exec($sql)){
        echo ("Showing has been created"); 
    }
    else{
        echo("There was an error creating the Showing, Check if your Showing already exists, or if the Showing id youre using is taken!");
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>