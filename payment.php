<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="payment.css">
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css"/>    
    <title>PAYMENT</title>
</head>
<body>
    <main class="d-flex">
        <?php
            include "aside.php";
        ?>    
        <section class="content">
            <?php
                include "searchBar.php";
            ?>    
            <div class="body">
                <div class="partTwo d-flex align-items-center">
                    <div class="pmtDtl fw-bolder">
                        <h4>Payment Details</h4>
                    </div>
                    <div class="sort text-info">
                        <i class="fal fa-sort ms-5"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-center"><hr></div>
                <div class="partThree px-4 ">
                    <table class="table table-borderless">
                      <thead class="text-muted">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Payment Schedule</th>
                          <th class="Col" scope="col">Bill Number</th>
                          <th class="Col" scope="col">Amount Paid</th>
                          <th class="Col" scope="col">Balance amount</th>
                          <th scope="col">Date</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php include "paymentTable.php" ?>
                      <?php foreach($table as $value) : ?>
                        <tr class="bg-white">
                          <td><?php echo $value['Name'] ?></td>
                          <td><?php echo $value['Payment Schedule'] ?></td>
                          <td><?php echo $value['Bill Number'] ?></td>
                          <td class="Col"><?php echo $value['Amount Paid'] ?></td>
                          <td class="Col"><?php echo $value['Balance amount'] ?></td>
                          <td class="Col"><?php echo $value['Date'] ?></td>
                          <td><?php echo $value['icon'] ?></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                </div> 
            </div>
        </section>   
    </main>  
</body>
</html>