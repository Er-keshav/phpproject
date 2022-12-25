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

    <div class="container mb-5">
        <h1 class="text-center mt-5 font-weight-light font-bold">My Listed Cars</h1>

        <div class="card">
            <div class="container mt-4 ml-3 ">
                <button type="button" class="btn btn-primary px-auto " data-toggle="modal" data-target="#AddListing">
                    ADD NEW CARS TO LIST </button>
                <?php include 'utilities/addnewmodal.php'; ?>
            </div>
            <div class="card-body">
                <?php include 'utilities/editmodal.php'; ?>
                <?php
                $id = $_SESSION['user_id'];
                $sql = "SELECT * FROM `listedcars` WHERE seller_id=$id ORDER BY srno DESC";
                $result = mysqli_query($conn, $sql); ?>

                <table id="datatableid" class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">MODEL NAME</th>
                            <th scope="col">MODEL NUMBER </th>
                            <th scope="col">CAPACITY </th>
                            <th scope="col">RENT PER DAY </th>
                            <th scope="col"> EDIT </th>
                        </tr>
                    </thead>
                    <?php
                    $index = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
         ??
                    <tbody>
                        <tr>
                            <td> <?php echo $row['srno']; ?> </td>
                            <td> <?php echo $row['modelname']; ?> </td>
                            <td> <?php echo $row['modelno']; ?> </td>
                            <td> <?php echo $row['capacity']; ?> </td>
                            <td> <?php echo $row['rent']; ?> </td>
                            <td>
                                <button type="button" class="btn btn-primary viewbtn px-auto"> EDIT </button>
                            </td>

                        </tr>
                    </tbody>
                    <?php
                        $index++;
                    }?>
                </table>
            </div>
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

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                $('#srno').val(data[0]?.trim());
                $('#insertdata').val(data[0].trim());
                $('#editmodelname').val(data[1].trim());
                $('#editmodelnumber').val(data[2].trim());
                $('#editseats').val(data[3].trim());
                $('#editprice').val(data[4].trim());
            });
        });
    </script>


</body>

</html>