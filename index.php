<?php
include_once "Assets/includes/connection.php ";
session_start();

if(isset($_SESSION['name'])){
    header("location: home.php");
}else{

if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $err_email = "Please insert an email";
    } else {
        $err_email = '';
    }

    if (empty($password)) {
        $err_psw = 'Please insert a password';
    } else {
        $err_psw = '';
    }

    $sql = "SELECT * FROM comptes";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $row['email'];
        $row['password'];
        $row['name'];
        $row['role'];

        if ($email == $row['email'] && $password == $row['password']) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];

            if(isset($_POST['check'])){
                setcookie('email' , $email , time() + 24*3600);
                setcookie('password' , $password , time() + 24*3600);
            }

            header("Location: ./home.php");
        } else if (empty($email) || empty($password)) {
            $error = '';
        } else if ($email !== $row['email'] || $password !== $row['password']) {
            $error = "The authentication is failed (Incorrect Email or Password)";
        }
    }
}
?>

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
            <h1 class="border-start border-5 border-info ps-2 mt-4 ms-3 fw-bolder">E-classe</h1>
            <h2 class="text-center p-2 fs-3">SIGN IN</h2>
            <p class="text-muted text-center">Enter your credentials to access your account</p>

            <form method="post" action="index.php">
                <div class="mb-3 ">
                    <div class="text-danger text-center my-2">
                        <div>
                            <?php if (isset($error)) {
                                echo $error;
                            } ?>
                        </div>
                    </div>
                    <label for="exampleInputEmail1" class="form-label text-muted">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control shadow-none" value="<?php echo $_COOKIE['email'] ?? ''; ?>">
                    <div class="text-danger">
                        <div>
                            <?php if (isset($err_email)) {
                                echo $err_email;
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-muted">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control shadow-none" value="<?php echo $_COOKIE['password'] ?? ''; ?>">
                    <div class="text-danger">
                        <div>
                            <?php if (isset($err_psw)) {
                                echo $err_psw;
                            } ?>
                        </div>
                    </div>
                </div>
                <button type="submit" name="sign_in" class="btn btn-info w-100 text-white mt-3 mb-4">SIGN IN</button>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="check">
                    <label class="form-check-label" for="flexSwitchCheckDefault">RESTER CONNECTEE</label>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="my-auto me-5">Forgot your password? <a href="#" class="link-primary">Reset Password</a></p>
                    <a href="./signUp.php"><button type="button" name="sign_up" class="btn btn-primary text-white">SIGN UP</button></a>
                </div>
            </form>

        </main>

    </div>
</body>

</html>
<?php } ?>