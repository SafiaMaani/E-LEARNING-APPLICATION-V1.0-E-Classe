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
            <button class="btn btn-info text-white">ADD NEW STUDENT</button>
            <button class="btn-info text-white rounded-circle" id="btnPlus">+</button>
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
              $json_file = "Assets/JSON/stud.json";
              $data = file_get_contents($json_file);
              $student = json_decode($data , true);

              foreach($student as $value)
              {
                echo '<tr>';
                echo '<td>' .'<img class="icone" src="Assets/images/icone.jpg" alt="user">';
                echo '<td>' .$value["Name"];
                echo '<td>' .$value["Email"];
                echo '<td>' .$value["Phone"];
                echo '<td>' .$value["Enroll Number"];
                echo '<td>' .$value["Date of admission"];
                echo '<td>' .'<a href= "Assets/edite.php"  class ="text-decoration-none"><i class="fal fa-pen text-info"></i><a>'. '<td>';
                echo '<td>' .'<a href= "Assets/delete.php"  class ="text-decoration-none"><i class="fal fa-trash text-info"></i><a>'. '<td>';
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