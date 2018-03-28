<?php
	include './partials/head.php';
	include './partials/body_start.php';

	//DB INFO
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts_at51";

?>
<h1>Your Purchases</h1>

<form class = "testing" action = "" method = "post">
    <input type="text" placeholder="Your Email" class="form-control" name="add-email">
    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Submit</button>
</form>

<table>
	<thead>
		<tr>
			<th>ticket id</th>
			<th>isSold</th>
			<th>complex id</th>
			<th>movie id</th>
			<th>email</th>	
		</tr>
	</thead>
<?php	
	try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$email = $_POST['add-email'];
			$sql = "SELECT * FROM `tickets` WHERE email = '$email';";
			//echo $sql;
			/*SELECT * FROM `user`*/
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
			}//end while
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