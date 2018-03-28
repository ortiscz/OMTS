<?php
	include './partials/head.php';
	include './partials/body_start.php';

	//DB INFO
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts_at51";

?>
<h1>Statistics</h1>
<table>
	<thead>
		<tr>
			<th>Most Popular ID</th>
			<th>Tickets Sold</th>	
		</tr>
	</thead>
<?php	
    try { //get most popular movie
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        /*SELECT movie_id FROM `tickets` WHERE isSold = TRUE;*/
        $sql = "SELECT movie_id FROM `tickets` WHERE isSold = TRUE;";
        /*echo $sql; was done for testing */
        //$movie_ids = $conn->exec($sql);
        // set array
        $query = $conn->prepare( $sql );
        $query->execute();
        $results = $query->fetchAll( PDO::FETCH_COLUMN );    
        $movie_ids = array();
        foreach( $results as $row ){
            $movie_ids[] = $row;
        }

        $sql = "SELECT DISTINCT movie_id FROM `tickets` WHERE isSold = TRUE;";
        $unique_ids = $conn->exec($sql);
        //init counter array to be 
        $counter = array();
        for ($i = 0; $i < count($movie_ids); $i++){
            $counter["$movie_ids[$i]"] = 0;
        }
        for ($i = 0; $i < count($movie_ids); $i++)
            $counter["$movie_ids[$i]"] = $counter["$movie_ids[$i]"] + 1;
        //now find which has the most watched movie.
        $highest_id = $movie_ids[0];
        //this loops a lot of extra times..  i dont care. we wont have super laggy system either way and i dont want to optimize this.
        //To optimize this i would select all distinct ids and use that.
        for ($j = 0; $j < count($movie_ids); $j++){
            if($counter["$movie_ids[$j]"] > $counter["$highest_id"]){
                $highest_id = $movie_ids[$j];
            }
        }
        // echo ("Most popular movie ID = " .$highest_id);
        // echo ("Tickets this movie sold: " .$counter[$highest_id]);
        echo "<td> Movie: $highest_id </td>";
        echo "<td>$counter[$highest_id]</td>";
        echo "<tr>";
    }//end try
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }//end catch most popular movie

    //most popular complex:
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
        /*SELECT complex_id FROM `tickets` WHERE isSold = TRUE;*/
        $sql = "SELECT complex_id FROM `tickets` WHERE isSold = TRUE;";
        /*echo $sql; was done for testing */
        //$complex_ids = $conn->exec($sql);
        // set array
        $query = $conn->prepare( $sql );
        $query->execute();
        $results = $query->fetchAll( PDO::FETCH_COLUMN );    
        $complex_id = array();
        foreach( $results as $row ){
            $complex_id[] = $row;
        }
    
        $sql = "SELECT DISTINCT complex_id FROM `tickets` WHERE isSold = TRUE;";
        $unique_ids = $conn->exec($sql);
        //init counter array to be 
        $counter = array();
        for ($i = 0; $i < count($complex_id); $i++){
            $counter["$complex_id[$i]"] = 0;
        }
        for ($i = 0; $i < count($complex_id); $i++)
            $counter["$complex_id[$i]"] = $counter["$complex_id[$i]"] + 1;
        //now find which has the most watched movie.
        $highest_id = $complex_id[0];
        //this loops a lot of extra times..  i dont care. we wont have super laggy system either way and i dont want to optimize this.
        //To optimize this i would select all distinct ids and use that.
        for ($j = 0; $j < count($complex_id); $j++){
            if($counter["$complex_id[$j]"] > $counter["$highest_id"]){
                $highest_id = $complex_id[$j];
            }
        }
        //echo ("                                       Most popular complex ID = " .$highest_id);
        echo "<td> Complex: $highest_id </td>";
        echo "<td>$counter[$highest_id]</td>";
        echo "<tr>";
        //echo ("                                       Amount of tickets sold At that complex:= " .$counter[$highest_id]);
        //attempt to get the most popular theatre in the most popular complex:
        //echo("                                        Most popular theatre in the most popular complex = " );
    }//end try for getting most popular complex
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }//end catch most popular complex
    


?>

</table>

<?php
 	include './member/add-modal.php';
	include './partials/body_end.php';
?>			