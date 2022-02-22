<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>SIGN UP</title>
</head>

<body>
    <div class="all d-flex align-items-center justify-content-center">
        <main class="bg-white px-4">

            <h1 class="border-start border-5 border-info ps-2 mt-4 ms-3 fw-bolder">E-classe</h1>
            <h2 class="text-center p-2 fs-3">SIGN UP</h2>
            <p class="text-muted text-center">Create your account</p>

            <form method="post" action="./TRAITEMENT/traitementLogIn.php">
                <div class="mb-1">
                    <span for="exampleInputEmail1" class="form-label text-muted">Username</span>
                    <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-1">
                    <span for="exampleInputEmail1" class="form-label text-muted">Email</span>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-2">
                    <span for="exampleInputEmail1" class="form-label text-muted">Password</span>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="mb-1">
                    <span for="exampleInputEmail1" class="form-label text-muted">Confirm Password</span>
                    <input type="password" name="password" class="form-control" placeholder="Confirm your password" required>
                </div>
                <button type="submit" name="sign_up" class="btn btn-info w-100 text-white mt-2 mb-2">SIGN UP</button>
                <div class="d-flex justify-content-center">
                    <p class="my-auto me-5">Go back to the LOGIN page</p>
                    <a href="./index.php"><button type="button"  class="btn btn-primary text-white">SIGN IN</button></a>
                </div>
            </form>
        </main>
    </div>
</body>

</html>