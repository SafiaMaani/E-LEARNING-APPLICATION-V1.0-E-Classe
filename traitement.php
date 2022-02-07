<?php
include_once "connection.php";

//ADD
if(isset($_POST['add']))

{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrollNumber = $_POST['enrollNumber'];
    $dateofadmission = $_POST['dateofadmission'];

    $query =  "INSERT INTO `students`(`Name`, `Email`, `Phone`, `Enroll_Number`, `Date_of_admission`) 
    VALUES ('$name','$email','$phone','$enrollNumber','$dateofadmission')";
    mysqli_query($conn , $query);
}

//DELETE
if(isset($_GET['id']))
{
    $id = $_GET ["id"];
    $query = "DELETE FROM `students` WHERE id = '$id'";
    mysqli_query($conn , $query);
}

//EDIT
if(isset($_POST['edit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrollNumber = $_POST['enrollNumber'];
    $dateofadmission = $_POST['dateofadmission'];
    $id = $_POST['id'] ;
    $query =  "UPDATE `students` SET `Name`='$name',`Email`='$email',`Phone`='$phone',`Enroll_Number`='$enrollNumber',`Date_of_admission`='$dateofadmission' WHERE `id`= '$id' ";
    mysqli_query($conn , $query);
    echo mysqli_error($conn);
    
}

header("Location: student.php");
