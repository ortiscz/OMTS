<?php
/*Excecuted after the user has clicked the log-in button. 
This will check if the email address given + the username given match up with
one of the users in our database. */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omts_at51";

  /* try connecting to the database. */
  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    /*SELECT * FROM `user` WHERE email = 'T.Szendrey@hotmail.com' and password = 'dfgkjn';*/
    $input = "SELECT * FROM `users` WHERE email = '$email' and password = '$password';";
    
    $stmt = $conn->prepare($input);
    $stmt->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    /* The Given password + email match up to a user! */
    if($row){
        if($row['isAdmin'] == 1){
           echo '<script type="text/javascript">alert("Welcome '.$row['fname'].'!"); window.location="../view/admin/index.php"; </script>';
        }else{
          echo '<script type="text/javascript">alert("Welcome '.$row['fname'].'!"); window.location="../view/user/index.php"; </script>';

        };
    }
    else{
        echo "You were unable to login with the password and username you selected";
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>