<?php

$student_id= $_POST['student_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last__name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$dep=$_POST['department'];


if($email == "hackmail@gmail.com"){

    echo "Please you can't be registerd";
}else{

    echo "You can be registerd";
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_task";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students VALUES ('$student_id','$first_name','$last_name','$dob','$email','$dep')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }






?>