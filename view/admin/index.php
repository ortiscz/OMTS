<?php
	include './partials/head.php';
	include './partials/body_start.php';
?>


<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Street</th>
			<th>Street No</th>
			<th>City</th>
			<th>State</th>
			<th>ZIP</th>			
		</tr>
	</thead>
<?php
	/* List all the purchases said customer has made.*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts_at51";
	  /* try connecting to the database. */
	  try{
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    /*SELECT * FROM `user`*/
	    $sql = "SELECT fname, lname, street_name, street_number, city, state, zip FROM `users`;";
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

</table>

<?php
	include './partials/body_end.php';
?>			