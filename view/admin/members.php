<?php
	include './partials/head.php';
	include './partials/body_start.php';

	//DB INFO
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts_at51";
?>
<h1>Members</h1>

<a href="javascript:void();" data-toggle="modal" data-target="#addModal" class="btn btn-primary mt-2 mb-4">+ New</a>

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
			<th>Actions</th>			
		</tr>
	</thead>
<?php	
	  /* try connecting to the database. */
	  try{
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

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
	        echo '<td class="action-col">
	        <a href="./scripts/adminRemoveMember?id='..'" title="Go to detail"><img class="icon-action" src="../../assets/img/detail.svg"></a>
	        <a href="#" title="Delete row"><img class="icon-action" src="../../assets/img/delete.svg"></a>
	        </td>';
	        echo "</tr>";
	    }
	}
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}
?>

</table>

<?php
 	include './member/add-modal.php';
	include './partials/body_end.php';
?>			