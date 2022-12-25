<?php
session_start();
echo "Logging you out. Please wait...";

session_destroy();
header("Location: /book_a_car.php")
?>