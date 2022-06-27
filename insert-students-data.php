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







?>