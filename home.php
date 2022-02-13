<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/CSS/home.css">
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <title>HOME</title>
</head>

<body>
    <main class="d-flex">
        <?php include "Assets/includes/sideBar.php"; ?>
        <section class="content">
            <?php include "Assets/includes/searchBar.php"; ?>
            <div class="body">
                <div class="cards d-flex justify-content-around p-5">
                    <div class="student rounded p-3">
                        <?php
                        $stdNbr = "SELECT COUNT(id) FROM `students`";
                        $query = mysqli_query($conn, $stdNbr);
                        $result = mysqli_fetch_array($query);
                        ?>
                        <i class="far fa-graduation-cap text-info"></i>
                        <p class="text-muted">Students</p>
                        <p class="fw-bolder text-end"><?php echo $result['COUNT(id)'] ?></p>
                    </div>
                    <div class="course rounded p-3">
                        <?php
                        $crsNbr = "SELECT COUNT(id) FROM `courses`";
                        $query = mysqli_query($conn, $crsNbr);
                        $result = mysqli_fetch_array($query);
                        ?>
                        <i class="far fa-bookmark text-danger"></i>
                        <p class="text-muted">Course</p>
                        <p class="fw-bolder text-end"><?php echo $result['COUNT(id)'] ?></p>
                    </div>
                    <div class="payment rounded p-3">
                        <?php
                        $pymnt = "SELECT SUM(`Amount_Paid`) FROM `payment_details`";
                        $query = mysqli_query($conn, $pymnt);
                        $result = mysqli_fetch_array($query);
                        ?>
                        <i class="far fa-usd-square text-primary"></i>
                        <p class="text-muted">Payment</p>
                        <p class="fw-bolder text-end">DHS <?php echo $result['SUM(`Amount_Paid`)']?></p>
                    </div>
                    <div class="users rounded p-3">
                        <i class="fal fa-user text-white"></i>
                        <p class="text-muted">Users</p>
                        <p class="fw-bolder text-end">3</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>