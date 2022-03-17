<?php
include_once "../Assets/includes/connection.php";

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

    $query = "UPDATE `courses` SET `course` = '$course' , `price` = '$price' , `duration` = '$duration' , `domain` = '$domain' WHERE `id` = '$id' ";
    mysqli_query($conn , $query);
}

//DELETE
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $query = "DELETE FROM `courses` WHERE `id` = '$id'";
    mysqli_query($conn , $query);
}
sleep(3);
header("Location: ../courses.php");
?>