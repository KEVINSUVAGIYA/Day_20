<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "kevin";

$connection = mysqli_connect($server , $username , $password , $database);

if ($connection -> connect_error){
    die($connection -> connect_error);
}
else{
    echo "Connection Successful <br/> You Are now connected to Database: $database";
}

$enroll = $_REQUEST["enroll"];
$email = $_REQUEST["email"];
$branch = $_REQUEST["branch"];
$age = $_REQUEST["age"];
$feedback = $_REQUEST["feedback"];

$query = "INSERT INTO feedback_form1 VALUES ('$enroll','$email','$branch','$age','$feedback')"; 

if(mysqli_query($connection, $query)){  
    echo "Record inserted successfully";
}
else{  
   echo "Could not insert record: ". mysqli_error($connection);
}  
   
   mysqli_close($connection); 
?>