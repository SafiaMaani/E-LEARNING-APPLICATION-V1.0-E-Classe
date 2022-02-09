<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/CSS/student.css">
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PAYMENT</title>
</head>

<body>
    <main class="d-flex">
        <?php include "Assets/aside.php"; ?>
        <section class="content">
            <?php include "Assets/searchBar.php"; ?>
            <div class="body">
                <div class="partTwo d-flex align-items-center">
                    <div class="stdList fw-bolder">
                        <h3 class="fs-4 fw-bolder m-0">Payment Details</h3>
                    </div>
                    <div class="add">
                        <i class="fal fa-sort ms-5 text-info"></i>
                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW COUSE</button>
                        <button class="d-lg-none btn-info text-white rounded-circle" id="btnPlus" type="button" data-bs-toggle="modal" data-bs-target="#myModal">+</button>
                        <form action="./TRAITEMENT/traitementPayment.php" method="post">
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <input type="hidden" name="id">
                                        <div class="modal-header">
                                            <span class="input-group-text">name</span>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="modal-header">
                                            <span class="input-group-text">Payment Schedule</span>
                                            <input type="text" name="payment" class="form-control">
                                        </div>
                                        <div class="modal-header">
                                            <span class="input-group-text">Bill Number</span>
                                            <input type="number" name="bill" class="form-control">
                                        </div>
                                        <div class="modal-header">
                                            <span class="input-group-text">Amount Paid</span>
                                            <input type="number" name="amount" class="form-control">
                                        </div>
                                        <div class="modal-header">
                                            <span class="input-group-text">Balance amount</span>
                                            <input type="text" name="balance" class="form-control">
                                        </div>
                                        <div class="modal-header">
                                            <span class="input-group-text">Date</span>
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="add" class="btn btn-danger" data-bs-dismiss="modal">ADD</button>
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
                <div class="partThree px-4 ">
                    <table class="table table-borderless table-striped">
                        <thead class="text-muted">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Payment Schedule</th>
                                <th scope="col">Bill Number</th>
                                <th class="Col" scope="col">Amount Paid</th>
                                <th class="Col" scope="col">Balance amount</th>
                                <th class="Col" scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php
                            $sql = "SELECT * FROM `payment_details`";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $row["Name"];
                                echo '<td>' . $row["Payment_Schedule"];
                                echo '<td>' . $row["Bill_Number"];
                                echo '<td>' . $row["Amount_Paid"];
                                echo '<td>' . $row["Balance_amount"];
                                echo '<td>' . $row["Date"];
                                echo '<td>' . '<a href= "payment.php?id=' . $row["id"] . '"  class ="text-decoration-none"><i class="fal fa-eye text-info"></i></a>' . '<td>';

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