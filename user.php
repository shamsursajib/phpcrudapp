<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];


    $sql = "INSERT into fcruddb (name,email,address,mobile) VALUES (' $name', '$email', '$address', '$mobile')";
    // $sql = "insert into 'fcruddb' (name,address,mobile) values(' $name', '$address', '$mobile')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo " Data Inserted Successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label type="name" class="form-label">Name</label>
                <input name="name"  class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label type="email" class="form-label">Email</label>
                <input name="email"  class="form-control" placeholder="Enter Your Email">
            </div>

            <div class="mb-3">
                <label type="address" class="form-label">Address</label>
                <input name="address"  class="form-control" placeholder="Enter Your Address">
            </div>
            <div class="mb-3">
                <label type="mobile" class="form-label">Mobile</label>
                <input name="mobile"  class="form-control" placeholder="Enter Your Mobile">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

</body>

</html>