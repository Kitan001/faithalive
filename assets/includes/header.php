<?php
session_start();
include 'assets/database/conn.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}

?>
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email= '{$_SESSION['email']}'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
           if(!$row['email']){
            echo "<script>alert('User not found')</script>";
            header("location:index.php");
           }
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$row['username']?>-Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/utilities/all.min.css">
    <link rel="stylesheet" href="assets/utilities/bootstrap.min.css">
   
    <link rel="stylesheet" href="assets/utilities/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/utilities/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <section id="menu">
    
        <div class="items">
           
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="dashboard.php">Home</a></li>
            <!-- <li><i class="fa fa-envelope"></i><a href="#">Messges</a></li> -->
            <li><i class="fa fa-upload" aria-hidden="true"></i><a target="_blank" href="upload_page.php">Upload Files</a></li>
            <li><i class="fa fa-file"></i><a target="_blank" href="uploaded_files.php">Uploaded Files</a></li>
            
            <?php
            $admin = "SuperAdmin";
                if($row['position'] == $admin){?>
                    <li><i class="fa fa-user-circle" aria-hidden="true"></i><a target="_blank" href="add_admin.php">Add Administrator</a></li>
                <?php
                }

            ?>
            <li><i class="fas fa-street-view    "></i></i><a target="_blank" href="view.php">View Site</a></li>
         </div>

        <div class="items2">
            <li><i class="fa fa-user"></i><a href="profile.php">Profile</a></li>
            <?php
            $admin = "SuperAdmin";
                if($row['position'] == $admin){?>
                    <li><i class="fa fa-user-circle" aria-hidden="true"></i><a target="_blank" href="admin_list.php">Administrators List</a></li>
                <?php
                }

            ?>
           
            <li><i class="fa fa-cog"></i><a href="settings.php">Settings</a></li>
            <li><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
        </div>
    </section>
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>
                <div class="text">

                    <span><?=$row['position']?>, <?=$row['username']?></span>
                </div>
               
            </div>
            <div class="profile">
                
                <a href="logout.php">
                    <i class="fa fa-arrow-circle-o-right"></i>
                </a>
            </div>
        </div>
        <div class="values">
        <div class="container">