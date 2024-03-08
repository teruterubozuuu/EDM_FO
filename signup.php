<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$pass = md5($password);

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "emc_fo";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die("Connect Error (". mysqli_connect_errno() .')'.mysqli_connect_error());
} else {
    $sql = "INSERT INTO users(firstname, lastname, username, password)
            values ('$firstname', '$lastname', '$username', '$password')";
            if ($conn->query($sql)) { 
                header("Location: login.html");
            } else {
                echo "Error";
            }
            $conn->close();
}
?>