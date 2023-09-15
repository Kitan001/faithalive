<?php include 'assets/includes/header.php'?>






    <button class="btn btn-primary my-5 text-decoration-none"><a target="_blank" href="upload_page.php" class="text-light">Upload File</a></button>
    <table class="table table-responsive-sm">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col" style="text-align:center;">Title</th>
      <th scope="col" >Audio</th>
      <th scope="col">Description</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
        include_once 'assets/database/conn.php';
        $sql =" SELECT * FROM files ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while ($audio = mysqli_fetch_assoc($res)){
                $id= $audio['id'];
                $title= $audio['title'];
                $text= $audio['text'];
                // $email = $row['email'];
                // $mobile=$row['Mobile'];?>
                <tr>
                 <th scope="row"><?=$id?></th>
                <td ><?=$title?></td>
                 <td ">
                <audio src="files/<?=$audio['file']?>" controls></audio>
                </td>
                <td><?=$text?></td>
                
                <td style="text-align: center;">
    <button class="btn btn-primary " ><a href="files/<?=$audio['file']?>" download="files/<?=$audio['file']?>" class="text-light"><i class="fa fa-download" aria-hidden="true"></i></a></button>
    <?php if($row['position'] == $admin){
    echo '<button  class="btn-danger btn"><a href="delete.php?deleteid='.$id.'"  class="text-light"><i class="fa fa-recycle" aria-hidden="true"></i></a></button>';
    }
    ?>
   </td>
            <?php
            }
            }
        else{
            echo "<script>alert('You Have Not Uploaded Any File!!!')</script>";
        }
    ?>
 

<?php include 'assets/includes/footer.php';?>

    
