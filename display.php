<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHow Data</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light"> Add User</a>   </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      include 'connect.php';
$sql = "SELECT * from fcruddb ";
$result = mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
$id=$row['sl'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$mobile=$row['mobile'];
echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$address.'</td>
<td>'.$mobile.'</td>
<td>
<button class="btn btn-primary "> <a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger "><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button> 
 </td>
</tr>';
  }
}
      ?>
    

  </tbody>
</table>
  
    </div>
</body>

</html>