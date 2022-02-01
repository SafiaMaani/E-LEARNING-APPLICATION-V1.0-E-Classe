<?php
$table = [
    ["Name" => "Safia", "Payment Schedule" => "First", "Bill Number" => "00012223", "Amount Paid" => "DHS 110,00", "Balance amount" => "DHS 500,000", "Date" => "05-Jan,2022"],
    ["Name" => "Salma", "Payment Schedule" => "Second", "Bill Number" => "83746984", "Amount Paid" => "DHS 210,00", "Balance amount" => "DHS 510,000", "Date" => "05-Fev,2022"],
    ["Name" => "Fatima", "Payment Schedule" => "Third", "Bill Number" => "02938409", "Amount Paid" => "DHS 150,00", "Balance amount" => "DHS 400,000", "Date" => "05-Dec,2022"],
    ["Name" => "Meriem", "Payment Schedule" => "Foorth", "Bill Number" => "29834784", "Amount Paid" => "DHS 200,00", "Balance amount" => "DHS 510,000", "Date" => "05-Mar,2022"],
];


$json_table = json_encode($table);

file_put_contents("<Assets/JSON/pay.json", $json_table);


?>
