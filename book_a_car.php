<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>BookNDrive</title>
</head>

<body>
    <?php
    include 'utilities/dbconnect.php';
    ?>
    <?php
    include 'utilities/navbar.php';
    ?>

    
    <div class="container-fluid px-5 pb-5">

        <h1 class="text-center mt-5 font-weight-light font-italic">Rent Cars At Lowest Prices</h1>

        <div class="row mt-4 pt-3">
            <!-- writing while loop to list the cars -->
            <?php
             $sql= "SELECT * FROM `listedcars` ORDER BY srno DESC";
              $result= mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo '
                  <div class="col-md-4">';

                  if(isset($_SESSION['user_id'])){
                echo '<form class="px-3 mx-1 mb-5" action="/utilities/handlebooking.php?srno='.$row['srno'].'&userid='.$_SESSION['user_id'] .'" method="post">';
                  }
                  else{
                   echo '<form class="px-3 mx-1 mb-5" action="/utilities/handlebooking.php">';
                  }
                echo '
                    <div class="card md-3" style="width: 22rem;">
                        <h5 class="card-header bg-dark text-light text-center py-3">'.$row['modelname'].'</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex text-secondary">Vehicle No. : <div class="text-dark ml-2">'.$row['modelno']. '</div></li>
                            <li class="list-group-item d-flex text-secondary">Seating Capacity : <div class="text-dark ml-2">'.$row['capacity']. '</div></li>
                            <li class="list-group-item d-flex text-secondary">Rent (In Rs / Day): <div class="text-success ml-2">'.$row['rent']. '</div></li>';
                    //    logged in as customer
                    $date = date('Y-m-d');
                      if(isset($_SESSION['type']) && $_SESSION['type']==1){

                          echo '  
                          <form>
                          <li class="list-group-item text-secondary">Start Date <div class="pt-1"><input type="date"
                                       name="bookdate" class="form-control datepicker" novalidate id="date1" min="'. $date .'" required></div>
                            </li>
                            <li class="list-group-item text-secondary">Number of Days <div class="pt-1">
                            <input type="number" name="noofdays"  class="form-control number"  max="30"  id="numberofdays" required></div>
                            </li>
                            <button class="btn btn-outline-success p-2 m-3" type="submit">BOOK NOW</button>
                            </form>';
                        } 
                        // logged in as rental agency
                        else if(isset($_SESSION['type']) && $_SESSION['type']==2){
                            echo '  <button class="btn btn-outline-secondary p-2 m-3" disabled type="button">BOOK NOW</button>
                            ';
                        }
                        // not logged in
                        else{
                            echo ' 
                            <a class="btn btn-outline-success p-2 m-3" href="/login.php" type="submit">BOOK NOW </a>';
                        }

                   echo '</ul>
                    </div>
                </form>
             </div>';
              }
            ?>
        </div>
    </div>
    <?php
    include 'utilities/footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>