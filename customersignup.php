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
    
    <div class="container" style="margin-top: 3rem">

        <h2 class="text-center font-weight-light">Sign-Up to get Started!</h2>

        <div class="d-flex justify-content-center mt-4 mx-2">
            <form class="form" style="padding-left: 4rem" action="/utilities/handlesignup.php" method="post">

                <div class="btn-group btn-lg btn-light btn-block mb-4 p-0" role="group" style="width: 23rem;"
                    aria-label="Basic example" >
                    <a type="button" class="btn btn-success p-2" href="/customersignup.php">User</a>
                    <a type="button" class="btn btn-outline-success p-2" href="/sellersignup.php">Rental Agency</a>
                </div>

                <div class="form-row mb-2">
                    <div class="col-md-5 form-label-group mr-2">
                        <input type="text" id="inputfirstname" style="height: 3rem;" class="form-control"
                           name="firstname" placeholder="First name" required autofocus>
                        <label for="inputfirstname">First name</label>
                    </div>

                    <div class="col-md-5 form-label-group">
                        <input type="text" id="inputlastname" style="height: 3rem;" class="form-control"
                        name="lastname" placeholder="Last name" required>
                        <label for="inputlastname">Last name</label>
                    </div>
                </div>

                <div class="form-label-group">
                    <input type="email" id="inputEmail" style="width: 23rem;height: 3rem;" class="form-control"
                    name="emailadd" placeholder="Email address" required>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" style="width: 23rem;height: 3rem;"
                    name="passwrd"  class="form-control mt-2" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" style="width: 23rem;height: 3rem;"
                    name="cpasswrd" class="form-control mt-2" placeholder="Confirm Password" required>
                    <label for="inputPassword">Confirm Password</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block mt-3" style="width: 23rem;" type="submit">Sign Up</button>
            </form>
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