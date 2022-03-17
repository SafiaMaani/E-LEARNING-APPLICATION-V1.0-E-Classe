<?php
include "../Assets/includes/connection.php";

//SIGN UP
if (isset($_POST['sign_up'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `comptes`(`email`, `password`, `name`) 
        VALUES ('$email','$password','$name')";
    $query = mysqli_query($conn, $sql);

    sleep(2);
    header("Location: ../index.php");
}

