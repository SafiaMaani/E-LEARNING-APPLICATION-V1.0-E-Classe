<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="student.css">
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css"/>    
    <title>STUDENTS</title>
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
                    <div class="stdList fw-bolder">
                        <h4>Students List</h4>
                    </div>
                    <div class="add">
                        <i class="fal fa-sort ms-5 text-info"></i>
                        <button class="btn btn-info text-white">ADD NEW STUDENT</button>
                        <button class=" btn-info text-white rounded-circle" id="btnPlus">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center"><hr></div>
                <div class="partThree px-4 ">
                    <table class="table table-borderless">
                      <thead class="text-muted">
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th class="Col" scope="col">Phone</th>
                          <th class="Col" scope="col">Enroll Number</th>
                          <th class="Col" scope="col">Date of admission</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="bg-white rounded">
                        <?php include "studentTable.php" ?>
                        <?php foreach($table as $value) : ?>
                          <tr>
                            <td scope="row"><?php echo $value['image'] ?></td>
                            <td><?php echo $value['Name'] ?></td>
                            <td><?php echo $value['Email'] ?></td>
                            <td class="Col"><?php echo $value['Phone'] ?></td>
                            <td class="Col"><?php echo $value['Enroll Number'] ?></td>
                            <td class="Col"><?php echo $value['Date of admission'] ?></td>
                            <td><?php echo $value['icon'] ?></td>
                            <td><?php echo $value['icone'] ?></td>
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