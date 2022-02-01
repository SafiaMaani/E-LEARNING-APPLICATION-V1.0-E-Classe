<?php 
    $table = [
        ["Name" => "Safia","Email" => "saf@email.com","Phone" => "7305477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
        ["Name" => "Ahmad","Email" => "ahm@email.com","Phone" => "1034477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
        ["Name" => "Salma","Email" => "sal@email.com","Phone" => "3025477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
        ["Name" => "Fatima","Email" => "fati@email.com","Phone" => "1234477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
        ["Name" => "Said","Email" => "said@email.com","Phone" => "3409477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
        ["Name" => "Meriem","Email" => "mery@email.com","Phone" => "3094477760","Enroll Number" => "1234567305477760","Date of admission" => "08-Dec,2021"],
    ];

    $json_array = json_encode($table);

    file_put_contents("Assets/JSON/stud.json" , $json_array);

?>

