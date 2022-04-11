<?php 
      include 'connect.php';
if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'] ;
   $sql=" DELETE from fcruddb where sl=$id";
   $result=mysqli_query($con,$sql);
   if($result){
       echo "Data Deleted SUccessfully";
       header('location:display.php');
   }
   else{
    die(mysqli_error($con));
   }
}

