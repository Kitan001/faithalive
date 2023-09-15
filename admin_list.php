<?php include 'assets/includes/header.php'?>
<!-- #region 

-->
<button class="btn btn-primary my-5 text-decoration-none"><a target="_blank" href="add_admin.php" class="text-light">Add New Admin</a></button>
    <table class="table table-responsive-sm">
    <h2>Admininstators List</h2>
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col" style="text-align:center;">Username</th>
      <th scope="col" style="text-align:center;" >Email</th>
      
      <th scope="col" style="text-align:center;">Position</th>
      <th scope="col" style="text-align:center;">Operations</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
        include_once 'assets/database/conn.php';
        $sql =" SELECT * FROM users";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while ($audio = mysqli_fetch_assoc($res)){
                $id= $audio['id'];
                $title= $audio['username'];
                $email= $audio['email'];
                $text= $audio['position'];
                // $email = $row['email'];
                // $mobile=$row['Mobile'];?>
                <tr>
                 <th scope="row"><?=$id?></th>
                <td  style="text-align:center;"><?=$title?></td>
                 <td style="text-align:center;"><?=$email?></td>
                <td style="text-align:center;"><?=$text?></td>
                
                <td  style="text-align:center;"
                >
    
    <?php if($row['position'] == $admin){
    echo '<button  class="btn-danger btn" title="Delete"><a href="admin_delete.php?deleteid='.$id.'"  class="text-light"><i class="fa fa-recycle" aria-hidden="true"></i></a></button>';
    }
    ?>
   </td>
            <?php
            }
        }
    ?>
        </div>
</div>



<?php include 'assets/includes/footer.php'?>