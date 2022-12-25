<?php
session_start();
echo "Logging you out. Please wait...";

session_destroy();
header("Location: /project_php/book_a_car.php")
?>