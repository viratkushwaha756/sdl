<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "registration";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fname = $_POST['txtfname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$pwd   = $_POST['txtpwd'];


$sql = "INSERT INTO registration (fname, mname, lname, pwd) 
        VALUES ('$fname', '$mname', '$lname', '$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.<br><br>";
} else {
    echo "Error: " . $conn->error;
}


$result = $conn->query("SELECT * FROM registration");

while ($row = $result->fetch_assoc()) {
    echo "ID: {$row['Id']}<br>";
    echo "First Name: {$row['fname']}<br>";
    echo "Middle Name: {$row['mname']}<br>";
    echo "Last Name: {$row['lname']}<br>";
    echo "-----------------------------<br>";
}

$conn->close();
?>
