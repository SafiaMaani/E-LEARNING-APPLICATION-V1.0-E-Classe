<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/CSS/payment.css">
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <title>PAYMENT</title>
</head>

<body>
    <main class="d-flex">
        <?php include "Assets/aside.php"; ?>
        <section class="content">
            <?php include "Assets/searchBar.php"; ?>
            <div class="body">
                <div class="partTwo d-flex align-items-center">
                    <div class="pmtDtl fw-bolder">
                        <h3 class="fs-4 fw-bolder m-0">Payment Details</h3>
                    </div>
                    <div class="sort text-info">
                        <i class="fal fa-sort ms-5"></i>
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
                            $json_file = "Assets/JSON/pay.json";
                            $data = file_get_contents($json_file);
                            $pay = json_decode($data, true);
                            foreach($pay as $value)
                            {
                                echo '<tr>';
                                echo '<td>' .$value["Name"];
                                echo '<td>' .$value["Payment Schedule"];
                                echo '<td>' .$value["Bill Number"];
                                echo '<td>' .$value["Amount Paid"];
                                echo '<td>' .$value["Balance amount"];
                                echo '<td>' .$value["Date"];
                                echo '<td>' .'<i class="fal fa-eye text-info"></i>'. '<td>';

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