<?php

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$email = $_POST["email"];
$Age = $_POST["Age"];


$host = "db";
$dbname = "form";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}         
        
$sql = "INSERT INTO student (Fname, Lname, email, Age)
         VALUES (?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}
echo "Succesfull";

mysqli_stmt_bind_param($stmt, "sssi",
                       $Fname,
                       $Lname,
                       $email,
                       $Age);

mysqli_stmt_execute($stmt);

echo "Record saved.";