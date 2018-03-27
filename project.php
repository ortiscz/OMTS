<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>
        Project OMTS | Database Management Systems
    </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <small>Back to <a href="index.html">Homepage</a></small>
                <h1>OMTS Prototype</h1>
                <p>The course project is intended to give students an opportunity to participate in all phases of the development of a database application. The development of the application will require you to use ER modeling techniques, relational modeling techniques, SQL, and to access your database via a web application. Projects are to be done in groups of no more than 3 individuals. The groups will remain the same for the entire course. Students may choose to work alone or in smaller groups, but no compensation will be made for this when marking. All assignments will be marked equally, regardless of the number of people in the group.</p>
                <h2>Project Requirements</h2>
                <p>You are required to develop a database that can be used to support the Online Movie Ticket Service (OMTS), which is an application for the advance purchase of movie tickets from any local theatre. Customers use the service to find out information about movies currently playing in their city and to order advance tickets for specific showings of the movies. Your task is to provide the database and related functionality for this application.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>table | Actors</h3>
                 <?php
                    echo "<table style='border: solid 1px black;'>";
                    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Date of Birth</th></tr>";

                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                    }

                    $servername = "wm102.wedos.net";
                    $username = "a118479_g51";
                    $password = "R2qk426g";
                    $database = "d118479_g51";

                    try {
                        $conn = new PDO("mysql:host=$servername;port=3306;dbname=".$database.";charset=utf8", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conn->prepare("SELECT * FROM Actor");
                        $stmt->execute();

                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                            echo $v;
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                    ?> 
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>