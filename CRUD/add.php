<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <title>Edite</title>
</head>

<body>
    <form method="POST" action="../traitement.php">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Name</span>
            <input type="text" class="form-control" name="name" placeholder="name" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input type="email" class="form-control" name="email" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">N°</span>
            <input type="number" class="form-control" name="phone" placeholder="N°" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Enroll N°</span>
            <input type="number" class="form-control" name="enrollNumber" placeholder="Enroll N°" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Date of admission</span>
            <input type="date" class="form-control" name="dateofadmission" placeholder="Date" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div>
            <button class="btn btn-primary" name="add" type="submit">ADD</button>
        </div>
    </form>
</body>

</html>