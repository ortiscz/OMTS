<?php
/* 
Add a movie to the database
Expects to have: 
$id = $_POST["movie-id"];
$id_director-id = $_POST["movie-director-id"];
$production = $_POST[movie-production"];
$title = $_POST["movie-title"];
$duration = $_POST["movie-duration"];
$rating = $_POST["movie-rating"];
$synopsis = $_POST["movie-synopsis"];

*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $id = $_POST["movie-id"];
    $director_id = $_POST["movie-director-id"];
    $production = $_POST["movie-production"];
    $title = $_POST["movie-title"];
    $duration = $_POST["movie-duration"];
    $rating = $_POST["movie-rating"];
    $synopsis = $_POST["movie-synopsis"];
    /*INSERT INTO `movie`(ID, `director_id`, `production`, `title`, `duration`, `rating`, `synopsis`)`*/
    $sql = "INSERT INTO `movie` VALUES($id, $director_id, '$production', '$title', $duration, '$rating', '$synopsis');";
    if($conn->exec($sql)){
        echo ("movie has been created"); 
    }
    else{
        echo("There was an error creating the movie, Check if your movie already exists, or if the movie id youre using is taken!");
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>