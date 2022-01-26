<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SIGN IN</title>
</head>
<body>
    <div>
        <main class="container  bg-white ">
            <div class="pt-2 pb-2 m-4">
                <h1 class="border-start border-5 border-info px-2 fw-bolder">E-classe</h1>
            </div>
            <h4 class="text-center p-3">SIGN IN</h4>
            <p class="text-muted text-center mb-5">Enter your credentials to access your account</p>
            <form>
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label text-muted">Email</label>
                    <input type="email" placeholder="Enter your email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-muted">Password</label>
                    <input type="password" placeholder="Enter your password" class="form-control shadow-none" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-info w-100 text-white mt-3 mb-3"><a class="text-decoration-none text-white" href="home.php">SIGN IN</a></button>
                <div class="mb-3">
                    <p class="text-center">Forgot your password? <a href="#" class="link-primary">Reset Password</a></p>
                </div>
            </form>
        </main>
    </div>
</body>
</html>