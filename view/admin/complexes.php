<?php
	include './partials/head.php';
	include './partials/body_start.php';

	//DB INFO
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omts";

if(isset($_POST["add-complex"])){
	try {
		$rname = $_POST['add-name'];
	    $rcity = $_POST['add-city'];
	    $rStName = $_POST['add-streetname'];
	    $rStNum = $_POST['add-streetnum'];
	    $rState = $_POST['add-state'];
	    $rzip = $_POST['add-zip'];
	    $rphone = $_POST['add-phone'];
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    /*The account number shouldnt be the primary key, the email should be. */
	    $sql = "INSERT INTO complex 
	    VALUES(DEFAULT,'$rname','$rStName',$rStNum,'$rcity','$rState','$rzip','$rphone');";
	    /*echo $sql; done for testing purposes */
	    /*VAVLUES(Account no, isAdmin, password, fname, lname, str name, str num, city, state, zip, phone, email, card num, card expir)*/
	    if ($conn->query($sql)) {
	        //echo "Success";
	        echo '<script type="text/javascript">alert("Complex was added!"); window.location="complexes.php"; </script>';
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
if(isset($_POST['del-complex'])){
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = 'DELETE FROM complex WHERE id = '.$_POST['del-complex'];  

		if ($conn->query($sql)) {
	        //echo "Success";
	        echo '<script type="text/javascript">alert("Complex was deleted!"); window.location="complexes.php"; </script>';
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
if(isset($_POST['update-complex'])){ 
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

		$sql = 
		'UPDATE complex SET 
			`name` = "'.$_POST['update-name'].'",
			`street_Name`= "'.$_POST['update-streetname'].'",
			`street_Number`= '.$_POST['update-streetnum'].',
			`city` = "'.$_POST['update-city'].'",
			`state` = "'.$_POST['update-state'].'", 
			`zip` = "'.$_POST['update-zip'].'", 
			`phone` = "'.$_POST['update-phone'].'" WHERE id = '. $_POST['update-complexId'];; 


		if ($conn->query($sql)) {
	        //echo "Success";
	        echo '<script type="text/javascript">alert("Complex was updated!"); window.location="complexes.php"; </script>';
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
<h1>Complexes</h1>

<a href="javascript:void();" data-toggle="modal" data-target="#addModal" class="btn btn-primary mt-2 mb-4">+ New</a>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Street</th>
			<th>Street No</th>
			<th>City</th>			
			<th>State</th>
			<th>ZIP</th>
			<th>Phone</th>
			<th>Actions</th>			
		</tr>
	</thead>
<?php	
	  /* try connecting to the database. */
	  try{
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	    $sql = "SELECT * FROM complex;";
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
	        echo '<a href="javascript:void();"
    				 data-toggle="modal" data-target="#editModal-'.$row['id'].'"><img class="icon-action" src="../../assets/img/detail.svg">
				</a>';

	        echo '<form action="" method="post"> 
    				<input type="hidden" value="'.$row['id'].'" name="del-complex" />                 
    				<button type="submit" name="del-complex-submit" class="no-style-btn"><img class="icon-action" src="../../assets/img/delete.svg"></button>
				</form>';
				
	        echo '</td>';	       
	        echo "</tr>";
	        echo '<!-- The Edit Complex Modal -->
    <div class="modal fade show" id="editModal-'.$row['id'].'">
        <div class="modal-dialog modal-lg">
            <div class="modal-content container-dark-blue">
                <!-- Modal body -->
                <div class="modal-body">
                    <a class="add-close white" data-dismiss="modal" href="javascript:void()">x</a>
                    <div class="continer">
                        <h1 class="modal-title text-center h3 blue mb-4 mt-2">Edit Complex '.$row['name'].'!</h1>

                        <form class="update-form" action="" method="post">   
                            <div class="form-group row">
                                <label for="update-name" class="col-sm-4 col-form-label text-right white">Complex name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="update-name" id="update-name"
                                    value="'.$row['name'].'">
                                </div>                                
                            </div>                        
                             <div class="form-group row">
                                <label for="update-streetname" class="col-sm-4 col-form-label text-right white">Street name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="update-streetname" id="update-streetname"
                                    value="'.$row['street_Name'].'">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="update-streetnum" class="col-sm-4 col-form-label text-right white">Street number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="update-streetnum" id="update-streetnum"
                                    value="'.$row['street_Number'].'">
                                </div>                                
                            </div>    
                            <div class="form-group row">
                                <label for="update-city" class="col-sm-4 col-form-label text-right white">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="update-city" id="update-city"
                                    value="'.$row['city'].'">
                                </div>                                
                            </div>                       
                            <div class="form-group row">
                                <label for="update-state" class="col-sm-4 col-form-label text-right white">State</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="update-state" id="update-state"
                                    value="'.$row['state'].'">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="update-zip" class="col-sm-4 col-form-label text-right white">ZIP</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="update-zip" id="update-zip"
                                    value="'.$row['zip'].'">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="update-phone" class="col-sm-4 col-form-label text-right white">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="update-phone" id="update-phone"
                                    value="'.$row['phone'].'">
                                </div>                                
                            </div>   
                            <input type="hidden" value="'.$row['id'].'" name="update-complexId" />                          
                            <button type="submit" name="update-complex" class="btn btn-primary btn-block mb-4 mt-4">Update</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>';
	    }
	}
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}
?>

</table>

<?php
 	include './modals/add-complex.php';
	include './partials/body_end.php';
?>			