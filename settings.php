<?php include 'assets/includes/header.php';
if(isset($_POST['submit'])){
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $encrypt_pass = $password;
                $user = $row['username'];
                                    $paswrd = $row['password'];
                                    $mail = $row['email'];
                                    $img_name = $row['profileImage'];
                if(isset($_FILES['profile_pic'])){
                    $img_name = $_FILES['profile_pic']['name'];
                    $img_type = $_FILES['profile_pic']['type'];
                    $tmp_name = $_FILES['profile_pic']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"assets/images/".$new_img_name)){
                                $encrypt_pass = $password;
                                
                                $updateQuery = "UPDATE `users` set username='$username', email='$email', password='$password', profileImage='$new_img_name' WHERE id='$row[id]'";
                                $insert_query = mysqli_query($conn, $updateQuery );
                            
                            
                            }
                        if($insert_query){
                            echo "<script>swal('Successful Update')</script>";
                            header("location:settings.php");
                        }
                            if(empty($_FILES['image'])){
                              echo "Cannot Input Empty image";
                            }
                        }
                    }
                }     
            }
            
                  ?>
<div class="values2">
    <div class="val">
    <form  method="post" class=" py-5" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="username" class="form-label" >Edit Username</label>
            <input type="text" value="<?=$row['username']?>" name="username" placeholder="<?=$row['username']?>"id=""><br>        
        
    
        <input type="text" name="username" placeholder="<?=$row['username']?>"id=""><br>
 

    </div>
    <label for="email" class="form-label">Edit Email</label>
    <input type="email" name="email" placeholder="<?=$row['email']?>" ><br>

    <label for="password" class="form-label">Change Password</label>
    <input type="password" name="password" ><br>
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" name="password" ><br>
    <label for="profile_pic">Update Your Profile Picture</label>
    <input type="file" name="profile_pic" id="">
    <input type="submit" name="submit" value="Upload">
    </form>
    </div>
           
        </div>
<?php include 'assets/includes/footer.php';?>