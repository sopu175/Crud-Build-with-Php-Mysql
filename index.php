<?php
include './database/db.php';

$sql = "SELECT * from user";
$result = mysqli_query($con, $sql);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/static/fav.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    <title>Crud</title>
    <!--==============css links start==============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--==============css links end==============-->
</head>
<body>


<section style="padding-top:100px">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>User List</h2>
            </div>
            <div class="clearfix"></div>
            <div class="col d-flex justify-content-between">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success">
                    Add User
                </button>
                <button type="button" onclick="window.print()" class="btn btn-light right">Print</button>
            </div>

            <div class="clearfix"></div>
            <hr style="margin-top:30px">
            <br>
            <br>
            <br>
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="3">Username</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php


                    foreach ($result as $single) {

                        ?>
                        <tr>

                            <td><?= $single['id'] ?></td>
                            <td><?= $single['email'] ?></td>
                            <td><?= $single['username'] ?></td>
                            <td><a href="#exampleModal<?= $single['id'] ?>" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal<?= $single['id'] ?>" class="btn btn-success">Edit</a>
                            </td>
                            <td><a href="./crud/delete.php?id=<?= $single['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>

                        <?php

                    }
                    ?>

                    <?php


                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- add data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./crud/add.php" method="post">
                    <div class="form_group">
                        <label for="usermane">Username</label>
                        <input type="text" required name="username" placeholder="Username" class="form-control">
                        <br>
                        <label for="email">Email</label>

                        <input type="text" required name="email" placeholder="email" class="form-control">
                        <br>
                        <label for="usermane">Password</label>

                        <input type="password" required name="password" placeholder="Password" class="form-control">
                        <br>
                        <input type="submit" name="send" value="Submit" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- update data -->

<?php


foreach ($result as $single) {

    ?>
    <div class="modal fade" id="exampleModal<?= $single['id'] ?>" tabindex="-1"
         aria-labelledby="exampleModalLabel<?= $single['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./crud/update.php" method="post">
                        <div class="form_group">
                            <label for="taskname">Username</label>

                            <input type="text" required name="username" placeholder="Username" class="form-control">
                            <br>
                            <label for="email">Email</label>
                            <input type="text" required name="email" placeholder="email" class="form-control">
                            <br>
                            <label for="password">Password</label>
                            <input type="password" required name="password" placeholder="Password" class="form-control">
                            <input type="text" required value="<?= $single['id'] ?>" name="id" placeholder="id" hidden
                                   class="form-control">

                            <br>
                            <input type="submit" name="submit" value="Submit" class="form-control">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php

}
?>

<?php


?>

<!--======================= js links ======================= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<!--======================= js links ======================= -->

</body>
</html>