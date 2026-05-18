<?php
 $dbhost = "localhost:3306"; 
 $dbuser = "root"; 
 $dbpass = ""; 
 $dbname = "nirvan"; 

 $conn= mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);



if($conn) {
  'echo <h1>Connected to MySQL</h1>';
} else {
    'echo <h1>MySQL Server is not connected</h1>';
}

?>
