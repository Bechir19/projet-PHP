<?php
$msg = ""; 


if (isset($_POST['upload'])) {
    
    $target = "images/" . basename($_FILES['image']['name']);

    
    $db = mysqli_connect("localhost", "root", "", "nutrition");

   
    $image = $_FILES['image']['name'];
  

    
    $sql = "INSERT INTO proteine  (image) VALUES ('$image')";

   
    if (mysqli_query($db, $sql)) {
       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "There was a problem uploading the image";
        }
    } else {
        $msg = "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    
    mysqli_close($db);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
</head>
<body>
<form action="upload_img.php" method="post" enctype="multipart/form-data">
    <div>

        <input type="file" name="image" id="image">
        <input type="submit" name="upload" id="upload" value="Upload">

<p><?php echo $msg; ?></p>  



    </div>

    
</body>
</html>
