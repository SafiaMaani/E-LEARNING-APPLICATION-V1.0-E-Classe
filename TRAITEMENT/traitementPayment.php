<?php
include_once "../connection.php";

//ADD
if(isset($_POST['add']))
{
    $name = $_POST['name'];
    $payment = $_POST['payment'];
    $bill = $_POST['bill'];
    $amount = $_POST['amount'];
    $balance = $_POST['balance'];
    $date = $_POST['date'];

    $query = "INSERT INTO `payment_details` (`Name`, `Payment_Schedule`, `Bill_Number`, `Amount_Paid`, `Balance_amount`, `Date`) 
    VALUES ('$name','$payment','$bill','$amount','$balance','$date')";
    
    mysqli_query($conn , $query);
}

header("Location: ../payment.php");
?>