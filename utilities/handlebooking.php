<?php
$srno = 0;
if( isset($_GET['srno'])){
    $srno = $_GET['srno'];
    $userid = $_GET['userid'];
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $bookdate= $_POST['bookdate'];
    $noofdays = $_POST['noofdays'];
    
    $sql = "Select * from listedcars where srno='$srno'";
    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $modelno = $row['modelno'];
        $sellerid = $row['seller_id'];
        $customerid= $userid;

      $sql = "INSERT INTO `bookedcars` (`modelno`, `customerid`, `sellerid`, `dateforbooking`, `noofdays`, `datetime`) VALUES ('$modelno', '$customerid', '$sellerid', '$bookdate', '$noofdays', current_timestamp())";

      $result = mysqli_query($conn, $sql);
      header("Location: /book_a_car.php?bookingconfirm=true");
      exit();
}
?>