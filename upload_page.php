<?php include 'assets/includes/header.php'; ?>


    <form action="upload.php" method="post" class=" py-5" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title"id=""><br>
    </div>
    <label for="text" class="form-label">Description</label>
    <input type="text" name="text" ><br>

    <input type="file" name="my_audio" accept=".mp3, .m4a , .webm, .aac,.wma, .3gpp,.wav,.ogg, .3gp"><br>
    
    <input type="submit" name="submit" value="Upload">
    </form>
   
    
    <?php include 'assets/includes/footer.php'; ?>