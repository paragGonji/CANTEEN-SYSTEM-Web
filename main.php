<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 id="main_title">Canteen Management</h1>
    <div class="container">

        <div class="box1">
            <h2>Customer</h2>
            <button class="btn btn-primary" id="addOrderButton">ADD ORDER</button>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Persone Name </th>
                    <th>Food Name </th>
                    <th>Price</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM canteen";

                $result = mysqli_query($connection, $query);

                if (!$result) {
                    die("Query Failed: " . mysqli_error($connection));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['cust_name']; ?></td>
                            <td><?php echo $row['food_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><a href="update_page.php?<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                            <td><a href="delete_page.php<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>

                        </tr>
                <?php

                    }
                }


                ?>
            </tbody>
        </table>


        <!-- Modal -->
        <form action="insert_data.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="f_name">Your Name</label>
                                <input type="text" name="f_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="l_name">Food Name</label>
                                <input type="text" name="l_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="add_student" value="ADD">
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <script>
        // Use JavaScript to open the modal when the button is clicked
        document.getElementById('addOrderButton').addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3F8gIGnqzuksRk5BdPtF+to8F5M2e5wP" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 




integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
