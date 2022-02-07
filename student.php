<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/CSS/student.css">
  <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
  <title>STUDENTS</title>
</head>

<body>
  <main class="d-flex">
    <?php include "Assets/aside.php"; ?>
    <section class="content">
      <?php include "Assets/searchBar.php"; ?>
      <div class="body">
        <div class="partTwo d-flex align-items-center">
          <div class="stdList">
            <h3 class="fs-4 fw-bolder m-0">Students List</h3>
          </div>
          <div class="add">
            <i class="fal fa-sort ms-5 text-info"></i>
            <a href="CRUD/add.php" class="text-decoration-none"><button class="btn btn-info text-white">ADD NEW STUDENT</button></a>
            <a href="Assets/CRUD/add.php" class="text-decoration-none"><button class="btn-info text-white rounded-circle" id="btnPlus">+</button></a>
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

              $sql = "SELECT id, Name, Email , Phone , Enroll_Number , Date_of_admission FROM students";
              $result = $conn->query($sql);

              while ($row = $result->fetch_assoc()) 
              {
                echo '<tr>';
                echo '<td>' . '<img class="icone" src="Assets/images/icone.jpg" alt="user">';
                echo '<td>' . $row["Name"];
                echo '<td>' . $row["Email"];
                echo '<td>' . $row["Phone"];
                echo '<td>' . $row["Enroll_Number"];
                echo '<td>' . $row["Date_of_admission"];
                echo '<td>' . '<a href= "CRUD/edite.php?id=' . $row["id"] . ' "  class ="text-decoration-none"><i class="fal fa-pen text-info"></i><a>' . '<td>';
                echo '<td>' . '<a href= "traitement.php?id=' . $row["id"] . '"  class ="text-decoration-none"><i class="fal fa-trash text-info"></i><a>' . '<td>';
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