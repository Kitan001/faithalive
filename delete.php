<?php

include 'assets/database/conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `files` where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
         echo "<script>alert('Deleted Sucessfully')</script>";
     
        header('Location:uploaded_files.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>