<?php
echo '
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="EditListingLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header mx-4">
                <h5 class="modal-title" id="EditListingLabel">Edit Listing</h5>
                </div>
                <div class="modal-body">
                
                <form class="form-signin" action="/listed_cars.php" method="post">

                <input type="hidden" id="srno" name="srno">

                <div class="form-label-group mx-4 mt-2">
                    <input type="text" id="editmodelname" style="width: 23rem;height: 3rem;" class="form-control"
                        name="editmodelname"  placeholder="Vehicle Model ( AUDI S Class )" required autofocus>
                    <label for="inputmodel">Vehicle Model</label>
                </div>

                <div class="form-label-group mx-4 mt-2">
                    <input type="text" id="editmodelnumber" style="width: 23rem;height: 3rem;" name="editmodelnumber"
                        class="form-control mt-2"  placeholder="Vehicle Number ( AA00XX0000 )">
                    <label for="inputvehicleno">Vehicle Number</label>
                </div>
        
                <div class="form-label-group mx-4 mt-2">
                    <input type="text" id="editseats" style="width: 23rem;height: 3rem;" class="form-control"
                        name="editcapacity"  placeholder="Seating Capacity" required>
                    <label for="inputseats">Seating Capacity</label>
                </div>

                <div class="form-label-group mx-4 mt-2">
                    <input type="text" id="editprice" style="width: 23rem;height: 3rem;" class="form-control"
                        name="editrent" placeholder="Rent per Day" required>
                    <label for="inputprice">Rent per Day (in Rs)</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name= "insertdata">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>'
    ?>