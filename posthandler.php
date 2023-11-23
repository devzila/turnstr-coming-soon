<?php
$servername = "localhost";
$username = "sql_turnstr_devz";
$password = "H85mYyEBh22CBc6F";
$dbname = "sql_turnstr_devz";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $sql = "INSERT INTO leads (name, email, created_at, updated_at) VALUES ('$name', '$email', now(), now() )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}


?>