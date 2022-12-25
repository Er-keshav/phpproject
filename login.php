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
    <div class="container " style="margin-top: 7rem">

        <h2 class="text-center font-weight-light">Log-In to rent a Car today!</h2>
        <div class="d-flex justify-content-center mt-5">
            <form class="form-signin" action="/utilities/handlesignin.php" method="post">

                <div class="form-label-group">
                    <input type="email" id="inputEmail" style="width: 23rem;height: 3rem;" class="form-control"
                        name="emailadd" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" style="width: 23rem;height: 3rem;" name="passwrd"
                        class="form-control mt-2" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>

                <div class="checkbox mb-3 mt-2">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" style="width: 23rem;" type="submit">Log In</button>
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