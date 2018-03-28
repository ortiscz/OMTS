<?php
	include './partials/head.php';
	include './partials/body_start.php';

	//DB INFO
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts_at51";

if(isset($_POST["submit"])){
	try {
	    $rpassword = $_POST['add-password'];
	    $rfname = $_POST['add-fname'];
	    $rlname = $_POST['add-lname'];
	    $rcity = $_POST['add-city'];
	    $rStName = $_POST['add-streetname'];
	    $rStNum = $_POST['add-streetnum'];
	    $rState = $_POST['add-state'];
	    $rzip = $_POST['add-zip'];
	    $rphone = $_POST['add-phone'];
	    $remail = $_POST['add-email'];
	    $rcard = $_POST['add-card'];
	    $rexp = $_POST['add-expiration'];
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    /*The account number shouldnt be the primary key, the email should be. */
	    $sql = "INSERT INTO Users 
	    VALUES(DEFAULT, FALSE, '$rpassword', '$rfname','$rlname','$rStName',$rStNum,'$rcity','$rState', '$rzip', '$rphone','$remail', $rcard , '$rexp');";
	    /*echo $sql; done for testing purposes */
	    /*VAVLUES(Account no, isAdmin, password, fname, lname, str name, str num, city, state, zip, phone, email, card num, card expir)*/
	    if ($conn->query($sql)) {
	        //echo "Success";
	        echo '<script type="text/javascript">alert("User was added!"); window.location="members.php"; </script>';
	    }
	    else{
	        echo "error";
	    }

	    $dbh = null;
	    }
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}
}
if(isset($_POST['del_user'])){
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = 'DELETE FROM Users WHERE id = '.$_POST['del_user'];  

		if ($conn->query($sql)) {
	        //echo "Success";
	        echo '<script type="text/javascript">alert("User was deleted!"); window.location="members.php"; </script>';
	    }
	    else{
	        echo "error";
	    }

	    $dbh = null;
	    }
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}
}   
?>
<h1>Members</h1>

<a href="javascript:void();" data-toggle="modal" data-target="#addModal" class="btn btn-primary mt-2 mb-4">+ New</a>

<table>
	<thead>
		<tr>
			<th>ID</th>
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

	    $sql = "SELECT id, fname, lname, street_name, street_number, city, state, zip FROM `users`;";
	    $sth = $conn->prepare($sql);
	    
	    if(!$sth->execute()) {
	        echo('Error');
	    }

	    while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
	        echo "<tr>";
	        foreach($row as $value) {
	            echo "   <td>{$value}</td>   ";
	        }
	        echo '<td class="action-col">';
	        echo '<form action="" method="post"> 
    				<input type="hidden" value="'.$row['id'].'" name="del_user" />                 
    				<button type="submit" name="del_user-submit" class="no-style-btn"><img class="icon-action" src="../../assets/img/delete.svg"></button>
				</form> 
	        <!--<a href="#" title="Go to detail"></a>
	        <a href="#" title="Delete row"><img class="icon-action" src="../../assets/img/delete.svg"></a>-->
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