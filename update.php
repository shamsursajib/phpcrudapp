<?php

include 'connect.php';
$id=$_GET['updateid'] ;

$sql= "SELECT * FROM fcruddb WHERE sl=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$mobile = $row['mobile'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];


    $sql = "UPDATE  fcruddb SET sl='$id', name='$name', email='$email', address='$address', mobile='$mobile' WHERE sl=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo " Data Updated Successfully";
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
                <input name="name" value=<?php echo $name; ?> class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label type="email" class="form-label">Email</label>
                <input name="email" class="form-control"   value=<?php echo $email; ?> >
            </div>

            <div class="mb-3">
                <label type="address" class="form-label">Address</label>
                <input name="address"  class="form-control" value=<?php echo $address ; ?>>
            </div>
            <div class="mb-3">
                <label type="mobile" class="form-label">Mobile</label>
                <input name="mobile"  class="form-control"  value=<?php echo $mobile ; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

</body>

</html>