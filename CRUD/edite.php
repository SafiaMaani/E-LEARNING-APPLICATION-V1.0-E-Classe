<?php
include_once "../connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM `students` WHERE id = $id ";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <title>Edite</title>
</head>

<body>

    <form action="../TRAITEMENT/traitementStudent.php" method="POST">
        <div class="container">
            <input type="hidden" name="id" id="" value="<?php echo $student['id'] ?>">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="Name addon-wrapping">Name</span>
                <input type="search" class="form-control" name="name" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $student['Name'] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="Email addon-wrapping">@</span>
                <input type="email" class="form-control" name="email" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $student['Email'] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="Phone addon-wrapping">N°</span>
                <input type="number" class="form-control" name="phone" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $student['Phone'] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="Enroll Number addon-wrapping">Enroll N°</span>
                <input type="number" class="form-control" name="enrollNumber" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $student['Enroll_Number'] ?>">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="Date of admission addon-wrapping">Date of admission</span>
                <input type="date" class="form-control" name="dateofadmission" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $student['Date_of_admission'] ?>">
            </div>
            <div>
                <button class="btn btn-primary" type="submit" name="edit">EDIT</button>
            </div>
        </div>
    </form>
</body>

</html>