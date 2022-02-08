<?php
include_once "../connection.php";

//ADD
if (isset($_POST['add'])) 
{
    $course = $_POST['course'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $domain = $_POST['domain'];

    $query = "INSERT INTO `courses` (`course` , `price` , `duration` , `domain`)
    VALUES ('$course','$price','$duration','$domain')";
    mysqli_query($conn , $query);
}
//EDIT
if (isset($_POST['edit'])) 
{
    $id = $_POST['id'];
    $course = $_POST['course'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $domain = $_POST['domain'];
var_dump($_POST);
    $query = "UPDATE `courses` SET `course` = '$course' , `price` = '$price' , `duration` = '$duration' , `domain` = '$domain' WHERE `id` = '$id' ";
    mysqli_query($conn , $query);
}

//DELETE



header("Location: ../courses.php");
?>