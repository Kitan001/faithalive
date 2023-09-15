<?php include 'assets/includes/header.php'?>
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $post = $_POST['position'];
    $sql = "INSERT INTO users (username, email, password, position) VALUES ('$username', '$email', '$password', '$post')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo"<script>alert('$post $username  Added')</script>";
        header("location:admin_list.php");
    }else{
        echo "<script>alert('Admin Addition Failed!!!')</script>";
    }
}

?>

<form action="" method="post" class=" py-5" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username"id=""><br>
    </div>
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" ><br>

    <label for="password" class="form-label">Set Password</label>
    <input type="password" name="password" ><br>
    <label for="">Position</label>
                <select name='position'>
                <option value='SuperAdmin'>Super Admin</option>
                <option value='Admin'>Admin </option>
                </select> <br>
    
    <input type="submit" name="submit" value="Upload">
    </form>


<?php include 'assets/includes/footer.php'?>