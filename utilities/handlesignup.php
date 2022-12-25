<?php
   $showError="false";
   $type=0;
  if($_SERVER["REQUEST_METHOD"]== "POST"){
    include 'dbconnect.php';
    $user_email= $_POST['emailadd'];
    $passwrd = $_POST['passwrd'];
    $cpasswrd= $_POST['cpasswrd'];
    if(isset($_POST['companyname'])){
    $type = 2;
    $name= $_POST['companyname'];
    }
    else{
    $type =1;
    $name= $_POST['firstname'] ." " .$_POST['lastname'];
    }
    
    // adding to database
    $existSql = "select * from `signup` where email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($passwrd == $cpasswrd){
            $hash = password_hash($passwrd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `signup` (`name`, `email`, `passwrd`, `type`) VALUES ( '$name','$user_email', '$hash', '$type')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                $newsql= "Select * from signup where email='$user_email'";
                $res = mysqli_query($conn, $newsql);
                $row = mysqli_fetch_assoc($res);
                session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['type'] = $type;
                  $_SESSION['useremail'] = $row['name'];
                  $_SESSION['user_id'] = $row['srno'];
                header("Location: /project_php/book_a_car.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
    if($type==1){
    header("Location: /project_php/customersignup.php?signupsuccess=false&error=$showError");
    }
    else{
    header("Location: /project_php/sellersignup.php?signupsuccess=false&error=$showError");
    }

  }
?>