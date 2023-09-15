<?php include 'assets/includes/header.php';?>
<link rel="stylesheet" href="assets/utilities/style.css">
<style>
    body{
        background: lightgray;
    }
</style>
  <div class="wrapper">
  <div class="adjustImage">
            <i class="fa fa-pencil" id="pencil" aria-hidden="true"></i>
            <input class="form-control" id="file" type="file" accept="jpg, png, jpeg" name="">
        </div>
    <div class="img-area">
      <div class="inner-area">
        <?php 
            if(!$row['profileImage']){?>
                <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">    
            <?php 
            }else{?>
                <img src="assets/images/<?=$row['profileImage']?>" alt="">
            <?php }
        ?>
        
      </div>
    </div>
    <!-- <div class="name"><?=$row['username']?></div>
    <div class="about"><?=$row['position']?></div> -->
    
    <!-- <div class="buttons">
      <button>Message</button>
      <button>Subscribe</button>
    </div> -->
   
  </div>
<script>
    pencil = document.querySelector('#pencil')
    file = document.querySelector('#file');

    //pencil.onClick = alert('Working')

</script>
<?php include 'assets/includes/footer.php';?>
