<?php
// Database credentials
$host_name = 'db5015990406.hosting-data.io';
$database = 'dbs13030428';
$user_name = 'dbu1836335';
$password = 'Lightkorra@11';

$link = new mysqli($host_name, $user_name, $password, $database);

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$attendees = $_POST['attendees'];

// Adds people to guest_list
$sql = "INSERT INTO guest_list VALUES (NULL, '$fname', '$lname', '$attendees');";

if ($link->query($sql) === TRUE) {
  // Success and redirect to index.html
  echo "<script>alert('RSVP succesful!'); window.location.href = 'https://prado-and-baker.com/';</script>";
} else {
  // Error 
  echo "<script>alert('There was an error. Please try again.');</script>";
}
// Close connection
$link->close();
?>