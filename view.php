<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="upload_page.php">Upload</a>
    <?php
        include_once 'assets/database/conn.php';
        $sql =" SELECT * FROM files ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while ($audio = mysqli_fetch_assoc($res)){?>
                <audio src="files/<?=$audio['file']?>" controls></audio>
            <?php
            }
            }
        else{
            echo "<h2>EMPTY</h2>";
        }
    ?>
</body>
</html>