<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>SIGN UP</title>
</head>

<body>
    <div class="all d-flex align-items-center justify-content-center">
        <main class="bg-white px-4">

            <h2 class="text-center fs-3 mt-3">SIGN UP</h2>
            <p class="text-muted text-center">Create your account</p>

            <form onsubmit="return(validation())" id="form" method="post" action="./TRAITEMENT/traitementLogIn.php">
                <div>
                    <span>Username</span>
                    <input id="name" type="text" name="username" class="form-control" placeholder="Enter your username">
                    <div class="d-flex align-items-center">
                        <div id="error1"></div>
                        <i id="good1" class="fa fa-check-circle text-success sticky-top"></i>
                        <i id="bad1" class="fa fa-exclamation-circle text-danger "></i>
                    </div>
                </div>

                <div>
                    <span>Email</span>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
                    <div class="d-flex align-items-center">
                        <div id="error2"></div>
                        <i id="good2" class="fa fa-check-circle text-success"></i>
                        <i id="bad2" class="fa fa-exclamation-circle text-danger"></i>
                    </div>
                </div>

                <div>
                    <span>Password</span>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password">
                    <div class="d-flex align-items-center">
                        <div id="error3"></div>
                        <i id="good3" class="fa fa-check-circle text-success"></i>
                        <i id="bad3" class="fa fa-exclamation-circle text-danger"></i>
                    </div>
                </div>

                <div>
                    <span>Confirm Password</span>
                    <input id="passwordConf" type="password" name="password" class="form-control" placeholder="Confirm your password">
                    <div class="d-flex align-items-center">
                        <div id="error4"></div>
                        <i id="good4" class="fa fa-check-circle text-success"></i>
                        <i id="bad4" class="fa fa-exclamation-circle text-danger"></i>
                    </div>
                </div>

                <button type="submit" name="sign_up" class="btn btn-info w-100 text-white mt-1 mb-1">SIGN UP</button>
                <div class="d-flex justify-content-center">
                    <p class="my-auto me-5">Go back to the LOGIN page</p>
                    <a href="./index.php"><button type="button" class="btn btn-primary text-white">SIGN IN</button></a>
                </div>
            </form>
        </main>
    </div>
    <script src="script.js"></script>
</body>

</html>