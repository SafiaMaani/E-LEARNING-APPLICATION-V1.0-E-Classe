<?php
    include "../Assets/includes/connection.php";
    if (isset($_POST['sign_in'])) 
    {
        $data = [
                'email' => $_POST['userEmail'],
                'password' => $_POST['userPassword'],
                // 'email-err' => '',
                // 'password-err' => ''
                ];

        // if($data['email'] == '' || $data['password'] == '')
        // {
        //     $data['email-err'] = 'please enter an email';
        //     $data['password'] = 'please enter a password';
        //     echo $data['email-err'] .' '. $data['password'];
        // }
        // switch($data)
        // {
        //     case $data['email'] == '' :
        //         echo $data['email-err'] = 'please enter an email';
        //         break;
        //     case $data['password'] == '' : 
        //         echo $data['password'] = 'please enter a password';
        //         break;
        // }
    
    
    //    $email = mysqli_real_escape_string($conn  , $email);
    //    $password = mysqli_real_escape_string($conn , $password);

        // if($data['email'] == 'safia@gmail.com' && $data['password'] == 123)
        // {
        //     header("Location: ../home.php");
        // }
        // else{
        //     // MSG D'ERRERUR
        //     header("Location: ../index.php");
        // }

    }
    

?>
