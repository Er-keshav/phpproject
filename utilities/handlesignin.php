<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $email = $_POST['emailadd'];
    $pass = $_POST['passwrd'];

    $sql = "Select * from signup where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['passwrd'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['type'] = $row['type'];
            $_SESSION['useremail'] = $row['name'];
            $_SESSION['user_id'] = $row['srno'];
        header("Location: /book_a_car.php?signupsuccess=true");
        exit();
        }
        else{
            $showError = "Incorrect Password";
        }  
    }
    else{
     $showError = "Email Id Not Found. Please Sign-up First ";
    }
    header("Location: /login.php?signupsuccess=false&error=$showError");
}

?>