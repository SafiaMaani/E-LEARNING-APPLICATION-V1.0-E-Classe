<?php
include_once "../connection.php";

$id = $_GET['id'];
$query = "SELECT * FROM `courses` WHERE id = $id ";
$result = mysqli_query($conn , $query);
$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
    <title>EDITE</title>
</head>

<body>
    <form action="../TRAITEMENT/traitementCourses.php" method="post">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Course</span>
                <input type="text" name="course" class="form-control" value="<?php echo $row["Course"] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Price</span>
                <input type="text" name="price" class="form-control" value="<?php echo $row["Price"] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Duration</span>
                <input type="time" name="duration" class="form-control" value="<?php echo $row["Duration"] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Domain</span>
                <input type="text" name="domain" class="form-control" value="<?php echo $row["Domain"] ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-danger" data-bs-dismiss="modal">EDIT</button>
            </div>
        </div>
    </form>
</body>

</html>