<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
  // Estalishing connection to database
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "contact";

  $connection = mysqli_connect($server, $username, $password, $database);
  // Checking for connection error
  if(!$connection) {
    die("An error occured" . mysqli_connect_error());
  }

  // Destructing data from frontend
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email_address = $_POST["email_address"];
  $phone_number = $_POST["phone_number"];
  $service = $_POST["service"];
  $message = $_POST["message"];
  $date = date("Y-m-d");

  // MySQL statement to insert into database
  $statement = "INSERT INTO messages 
          (first_name, last_name, email_address, phone_number, service_type, contact_message, created_date) 
  VALUES  ('$first_name', '$last_name', '$email_address', '$phone_number', '$service', '$message', '$date')";

  $result = mysqli_query($connection, $statement);

  if($result) {
    echo "Record entered successfully";
  } else {
    echo "An error occurred!" . mysqli_error($connection);
  }
}
?>