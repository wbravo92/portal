<?php
/*$servername = "mysql.hostinger.es";
$username = "u669375631_root";
$password = "53206w";
$dbname = "u669375631_porta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";


$sql = "INSERT INTO app_user (nombre, apellido, correo, contrasena, estado, fecha) 
VALUES ('John', 'Doe', 'john@example.com', '4', '1', '2016-09-18 12:58:00')";




if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/



// Create connection
$instancia=new mysqli('mysql.hostinger.es','u669375631_root','53206w','u669375631_porta');
// Check connection
if ($instancia->connect_error) {
    die("Connection failed: " . $instancia->connect_error);
} 

      
$query="INSERT INTO app_user (id,nombre, apellido, correo, contrasena, estado, fecha) 
VALUES (null,'lol', 'Doe', 'john@example.com', '4', '1', '2016-09-18 12:58:00')";
          
    
  
if ($instancia->query($query) === TRUE) {
    $last_id = $instancia->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $instancia->error;
}

$instancia->close();
        

?>


