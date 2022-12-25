<?php
session_start();
 echo '<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
 
    <a class="navbar-brand mb-0 text-success mx-3" href="/book_a_car.php"> BooknDrive  </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="form-inline my-2 my-lg-0 ml-auto">
            <ul class="navbar-nav mr-auto">';
            if(isset($_SESSION['type']) && $_SESSION['type']==2){
               $id= $_SESSION['user_id'];
               echo '<li class="nav-item active">
                    <a class="nav-link" href="listed_cars.php?listid='. $id . '">My Listed Cars<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link ml-3" href="booked_cars.php?listid='. $id . '">View Booked Cars<span
                            class="sr-only">(current)</span></a>
                </li>';
            }
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo '<li class="nav-item active">
                    <div class="d-flex nav-link ml-3" href="#">Welcome,<div class="text-success text-center ml-2">'. $_SESSION['useremail'] . '</div><span class="sr-only">(current)</span></div>
                </li>';
            }
            echo '</ul>';
            if(isset($_SESSION['type']) && ($_SESSION['type']==1 || $_SESSION['type']==2)){
                echo '
                <a class="btn btn-success my-2 my-sm-0 mx-3" type="signout" href="logout.php">LogOut</a>';
            }
            else{
                echo '
                <a class="btn btn-outline-success my-2 my-sm-0 mx-3" type="login" href="/login.php">LogIn</a>
            <a class="btn btn-success my-2 my-sm-0 mx-2" type="signup" href="/customersignup.php">SignUp</a>';
            }
            echo '
        </div>
    </div>
</nav>';
?>
<?php
if( isset($_GET['error'])){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Failure ! </strong>' . $_GET['error'] .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

?>