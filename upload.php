
<?php

if(isset($_POST['submit']) && isset($_FILES['my_audio'])){

    include "assets/database/conn.php";
    $title =$_POST['title'] ;
    $text =$_POST['text'] ;
    $audio_name= $_FILES['my_audio']['name'];
    $tmp_name= $_FILES['my_audio']['tmp_name'];
    $error = $_FILES['my_audio']['error'];
    if($error === 0){
        $audioex = pathinfo($audio_name, PATHINFO_EXTENSION);
        $audio_ex_lc = strtolower($audioex);
        $allowed_exs = array('mp3', 'webm', 'aac','wma', '3gpp','wav','ogg', 'm4a','3gp' );
        if(in_array($audio_ex_lc, $allowed_exs)){
            $new_audio_name = uniqid("audio-", true). '.'.$audio_ex_lc;
            $audio_upload_path = 'files/'.$new_audio_name;
            move_uploaded_file($tmp_name, $audio_upload_path);
            $sql="insert into `files`(title, text, file)values(".$title.", ".$text.",".$new_audio_name.")";
        mysqli_query($conn, $sql);
        header("location:uploaded_files.php");
        }else{
            echo "You can't upload this File";
            //header("location:uploading.php?error=$em");
        }

    }
}else{
    echo "You can't upload this File";
}

?>