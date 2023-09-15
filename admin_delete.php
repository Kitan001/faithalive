<?php

include 'assets/database/conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
         echo "<script>alert('Deleted Sucessfully')</script>";
     
        header('Location:admin_list.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>