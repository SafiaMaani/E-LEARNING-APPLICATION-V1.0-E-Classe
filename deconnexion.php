<?php 

session_start();

session_unset(); //vider les variables de sessions

session_destroy(); //detruire la session

header("location: index.php");

?>