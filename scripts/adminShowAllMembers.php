<?php
/* List all the member there are. Admin should have exclusive access to this. 
The formatting is very not pretty. Sorry about that. I dont know how to make it pretty*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";
  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /*SELECT * FROM `user`*/
    $sql = "SELECT * FROM `user`;";
    $sth = $conn->prepare($sql);
    if(!$sth->execute()) {
        echo('Error');
    }

    while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach($row as $value) {
            echo "   <td>{$value}</td>   ";
        }
        echo "</tr>";
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>