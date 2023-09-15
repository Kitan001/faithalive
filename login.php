<?php
session_start();
include_once 'assets/database/conn.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sel="select * from `users` where email='".$email."' and password='".$password."'";
    $result = mysqli_query($conn, $sel);
    $row = mysqli_fetch_array($result);
    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    if($row['password'] === $password && $row['email'] === $email){
        
        #echo "successfull Login";
   
        $result =mysqli_fetch_assoc($select_sql2);
        $_SESSION['email'] = $result['email'];
        header("location:dashboard.php");
    }else{
        echo "<script>Swal('User Not Found')</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/images/hotk.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/utilities/style.css">
    <!-- <link rel="stylesheet" href="assets/utilities/bootstrap.min.css">
    <link rel="stylesheet" href="assets/utilities/all.min.css"> -->
</head>
<body>
    <section class="bg">.</section>
    <section class="opening">
        <h2>FAITH-ALIVE</h2>
    </section>
    <form action="" method="post">
    <section class="log">
        <h2>Administrator Login</h2>
        
        <input type="text" name="email" class="inputText" placeholder="email"><br>
        <input type="password" class="inputText"  name="password" placeholder="Password" id=""><br>
        <input type="submit" class="submitBtn" value="Login" name="submit"><br>
        
    </section>
    </form>
    <footer class="foot">
        <p>Created by <a href="">ZOEHUB</a> &copy; 2023</p>
    </footer>
    
</body>
</html>