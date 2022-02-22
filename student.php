<?php 
session_start();

if(empty($_SESSION['email'])){
    header("location: index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/CSS/student.css">
  <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>STUDENTS</title>
</head>

<body>
  <main class="d-flex">
    <?php include "Assets/includes/sideBar.php"; ?>
    <section class="content">
      <?php include "Assets/includes/searchBar.php"; ?>
      <div class="body">
        <div class="partTwo d-flex align-items-center">
          <div class="stdList">
            <h3 class="fs-4 fw-bolder m-0">Students List</h3>
          </div>
          <div class="add">
            <i class="fal fa-sort ms-5 text-info"></i>
            <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW STUDENT</button>
            <button class="btn-info text-white rounded-circle" id="btnPlus" data-bs-toggle="modal" data-bs-target="#myModal">+</button>
            <form method="POST" action="./TRAITEMENT/traitementStudent.php">
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- i have to search how to add an image in sql -->
                    <!-- <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">image</span>
                        <input type="image" class="form-control" name="name" placeholder="image">
                    </div> -->
                    <div class="modal-header">
                      <span class="input-group-text" id="addon-wrapping">Name</span>
                      <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    <div class="modal-header">
                      <span class="input-group-text" id="addon-wrapping">@</span>
                      <input type="email" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="modal-header">
                      <span class="input-group-text" id="addon-wrapping">N°</span>
                      <input type="number" class="form-control" name="phone" placeholder="N°" required>
                    </div>
                    <div class="modal-header">
                      <span class="input-group-text" id="addon-wrapping">Enroll N°</span>
                      <input type="number" class="form-control" name="enrollNumber" placeholder="Enroll N°" required>
                    </div>
                    <div class="modal-header">
                      <span class="input-group-text" id="addon-wrapping">Date of admission</span>
                      <input type="date" class="form-control" name="dateofadmission" placeholder="Date" required>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" name="add" type="submit">ADD</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="px-4">
          <hr class="m-0">
        </div>
        <div class="partThree px-4">
          <table class="table table-borderless">
            <thead class="text-muted">
              <tr>
                <th></th>
                <th scope="col">Name</th>
                <th class="mailNone" scope="col">Email</th>
                <th class="Col colNone" scope="col">Phone</th>
                <th class="Col " scope="col">Enroll Number</th>
                <th class="Col colNone" scope="col">Date of admission</th>
              </tr>
            </thead>
            <tbody class="bg-white rounded">
              <?php

              $sql = "SELECT * FROM students";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>' . '<img class="icone" src="Assets/images/icone.jpg" alt="user">';
                echo '<td>' . $row["Name"];
                echo '<td>' . $row["Email"];
                echo '<td>' . $row["Phone"];
                echo '<td>' . $row["Enroll_Number"];
                echo '<td>' . $row["Date_of_admission"];
                echo '<td>' . '<a href= "CRUD/edite.php?id=' . $row["id"] . ' "  class ="text-decoration-none"><i class="fal fa-pen text-info"></i><a>' . '<td>';
                echo '<td>' . '<a href= "./TRAITEMENT/traitementStudent.php?id=' . $row["id"] . '" class ="text-decoration-none"><i class="fal fa-trash text-info"></i><a>' . '<td>';
                echo '</tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
<?php } ?>