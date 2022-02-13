<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>SIGN IN</title>
</head>

<body>
    <div class="all d-flex align-items-center justify-content-center">

        <main class="bg-white px-4">
            <h1 class="border-start border-5 border-info ps-2 mt-5 ms-3 fw-bolder">E-classe</h1>
            <h2 class="text-center p-3 fs-3">SIGN IN</h2>
            <p class="text-muted text-center">Enter your credentials to access your account</p>

            <form method="post" action="home.php">
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label text-muted">Email</label>
                    <input type="email" name="userEmail" placeholder="Enter your email" class="form-control shadow-none">
                    <span><?php if(isset($data)) echo $data['email_err']; ?> </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-muted">Password</label>
                    <input type="password" name="userPassword" placeholder="Enter your password" class="form-control shadow-none">
                </div>
                <button type="submit" name="sign_in" class="btn btn-info w-100 text-white mt-3 mb-3">SIGN IN</button>
                <div class="mb-3">
                    <p class="text-center">Forgot your password? <a href="#" class="link-primary">Reset Password</a></p>
                </div>
            </form>

        </main>

    </div>
</body>

</html>