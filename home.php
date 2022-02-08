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
        <?php include "Assets/aside.php"; ?>
        <section class="content">
            <?php include "Assets/searchBar.php"; ?>
            <div class="body">
                <div class="cards d-flex justify-content-around p-5">
                    <div class="student rounded p-3">
                        <i class="far fa-graduation-cap text-info"></i>
                        <p class="text-muted">Students</p>
                        <p class="fw-bolder text-end">243</p>
                    </div>
                    <div class="course rounded p-3">
                        <i class="far fa-bookmark text-danger"></i>
                        <p class="text-muted">Course</p>
                        <p class="fw-bolder text-end">13</p>
                    </div>
                    <div class="payment rounded p-3">
                        <i class="far fa-usd-square text-primary"></i>
                        <p class="text-muted">Payment</p>
                        <p class="fw-bolder text-end">DHS 556,000</p>
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