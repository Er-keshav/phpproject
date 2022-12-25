<?php
$id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //inserting into database
    if (isset($_POST['adddata'])) {
        $modelname = $_POST['modelname'];
        $seats = $_POST['capacity'];
        $price = $_POST['rent'];
        $modelnumber = $_POST['modelnumber'];
        $checksql = "Select * from listedcars where modelno='$modelnumber'";
        $result = mysqli_query($conn, $checksql);
        $numRows = mysqli_num_rows($result);
        echo $numRows;
        if ($numRows < 1) {
            $sql = "INSERT INTO `listedcars` (`seller_id`, `modelname`, `modelno`, `capacity`, `rent`, `datetime`) VALUES ('$id', '$modelname', '$modelnumber', '$seats', '$price', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            header("Location: /listed_cars.php?showAlert=false");
        }
    }
    if (isset($_POST['editid'])) {
        $modelname = $_POST['editmodelname'];
        $modelnumber = $_POST['editmodelnumber'];
        $seats = $_POST['editcapacity'];
        $price = $_POST['editrent'];
        $srno = $_POST['editid'];
        echo isset($_POST['insertdata']);
        //   echo $modelname;
        //   echo $modelnumber;
        //   echo dkksw;
        $sql = "UPDATE `listedcars` SET `modelname`='$modelname', `capacity`='$seats', `rent`='$price' WHERE `listedcars`.`srno`='$srno'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: /listed_cars.php?edit=true");
        }
    }
}

echo '
<!-- Modal -->
<div class="modal fade" id="AddListing" tabindex="-1" role="dialog" aria-labelledby="AddListingLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header mx-4">
                <h5 class="modal-title" id="AddListingLabel">Add New Listing</h5>
                </div>
                <div class="modal-body">
                <form class="form-signin" action="/listed_cars.php" method="post">

                    <div class="form-label-group mx-4 mt-2">
                        <input type="text" id="modelname" style="width: 23rem;height: 3rem;" class="form-control"
                            name="modelname" placeholder="Vehicle Model ( AUDI S Class )" required autofocus>
                        <label for="inputmodel">Vehicle Model</label>
                    </div>

                    <div class="form-label-group mx-4">
                        <input type="text" id="modelnumber" style="width: 23rem;height: 3rem;" name="modelnumber"
                            class="form-control mt-2" placeholder="Vehicle Number ( AA00XX0000 )">
                        <label for="inputvehicleno">Vehicle Number</label>
                    </div>
            
            
                <div class="form-label-group mx-4">
                    <input type="text" id="inputseats" style="width: 23rem;height: 3rem;" class="form-control"
                        name="capacity" placeholder="Seating Capacity" required>
                    <label for="inputseats">Seating Capacity</label>
                </div>

                <div class="form-label-group mx-4">
                    <input type="text" id="inputprice" style="width: 23rem;height: 3rem;" class="form-control"
                        name="rent" placeholder="Rent per Day" required>
                    <label for="inputprice">Rent per Day (in Rs)</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" name="adddata" class="btn btn-primary">Add New Listing</button>
            </div>
            </form>
        </div>
    </div>
</div>'
    ?>