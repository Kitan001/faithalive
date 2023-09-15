<?php include 'assets/includes/header.php'?>





        <div class="values">
       
           
        </div>

        <div class="values2">
        <table class="table table-responsive-sm">
            <h2>Uploaded Audios List</h2>
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col" style="text-align:center;">Title</th>
      <th scope="col" >Audio</th>
      <th scope="col">Description</th>
      
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
                
      <?php
            }}
      ?>
            
        </div>

        <div class="values3">
        <table class="table table-responsive-sm">
    <h2>Admininstators </h2>
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col" style="text-align:center;">Username</th>
      <th scope="col" style="text-align:center;" >Email</th>
      
      <th scope="col" style="text-align:center;">Position</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php
        include_once 'assets/database/conn.php';
        $sql =" SELECT * FROM users";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 1){
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
                
               
   </td>
            <?php
            }
        }
      
    ?>
        </div>
</div>


        <?php include 'assets/includes/footer.php'?>