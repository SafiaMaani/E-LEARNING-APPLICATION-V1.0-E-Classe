<?php
session_start();

if (empty($_SESSION['email'])) {
    header("location: index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/student.css">
        <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>COURSES</title>
    </head>

    <body>
        <main class="d-flex">
            <?php include "Assets/includes/sideBar.php"; ?>
            <section class="content">
                <?php include "Assets/includes/searchBar.php"; ?>
                <div class="body">
                    <div class="partTwo d-flex align-items-center">
                        <div class="stdList">
                            <h3 class="fs-4 fw-bolder m-0">Courses List</h3>
                        </div>
                        <div class="add">
                            <i class="fal fa-sort ms-5 text-info"></i>
                            <button class="btn btn-info text-white" type="button" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW COURSE</button>
                            <button class="btn-info text-white rounded-circle" id="btnPlus" type="button" data-bs-toggle="modal" data-bs-target="#myModal">+</button>
                            <form action="./TRAITEMENT/traitementCourses.php" method="post">
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <input type="hidden" name="id">
                                            <div class="modal-header">
                                                <span class="input-group-text">Course</span>
                                                <input type="text" name="course" class="form-control">
                                            </div>
                                            <div class="modal-header">
                                                <span class="input-group-text">Price</span>
                                                <input type="text" name="price" class="form-control">
                                            </div>
                                            <div class="modal-header">
                                                <span class="input-group-text">Duration</span>
                                                <input type="time" name="duration" class="form-control">
                                            </div>
                                            <div class="modal-header">
                                                <span class="input-group-text">Domain</span>
                                                <input type="text" name="domain" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="add" class="btn btn-primary" data-bs-dismiss="modal">ADD</button>
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
                                    <th scope="col">Course</th>
                                    <th class="mailNone" scope="col">Price en DH</th>
                                    <th class="Col colNone" scope="col">Duration</th>
                                    <th class="Col " scope="col">Domain</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white rounded">
                                <?php
                                $sql = "SELECT * FROM courses";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $row["Course"];
                                    echo '<td>' . $row["Price"];
                                    echo '<td>' . $row["Duration"];
                                    echo '<td>' . $row["Domain"];
                                    echo '<td>' . '<a href= "CRUD/editCourse.php?id=' . $row["id"] . '"  class ="text-decoration-none"><i class="fal fa-pen text-info"></i><a>' . '<td>';
                                    echo '<td>' . '<button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal' . $row["id"] . '"><i class="fal fa-trash text-info"></i></button>' . '<td>';
                                    echo '</tr>
                                    <div class="modal fade" id="exampleModal' . $row["id"] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Course Suppression</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   DO YOU REALLY WANT TO DELETE THIS COURSE ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO !</button>
                                                <a href="TRAITEMENT/traitementCourses.php?id= ' . $row["id"] . '" ><button type="button" class="btn btn-success" id="toast">YES, I_M SURE !</button></a>
                                                </div>
                                            </div>
                                        </div>
                                     </div>';
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>

                    <div id="notification" class="position-fixed bottom-0 end-0 p-3" style="visibility: hidden;">
                        <div class="text-success border border-5 border-success">
                            <!-- <button type="button" class="btn-close"></button> -->
                            <div class="toast-body">
                                The course was deleted succesfully
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </main>
        <script src="script.js"></script>
    </body>

    </html>
<?php } ?>