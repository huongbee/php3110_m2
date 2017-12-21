<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['btnUpload'])){

    if($_FILES['image']['name']==''){
        echo "dont choose file";
        return;
    }
    $file = $_FILES['image'];  
    // echo "<pre>";  
    // print_r($file);
    // echo "</pre>";

    $tmpName = $file['tmp_name'];
    $name = $file['name'];

    //kiem tra filezise <=1mb
    //chi cho phep upload hinh png, jpg, gif, jpeg
    //rename file
    
    $size = $file['size'];
    if($size>5*1024*1024){
        echo "File too large! Choose another";
        die;
    }
    //a.png
    //a.jpeg
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));

    $arrExt = ['png', 'jpg', 'gif', 'jpeg'];
    if(!in_array($ext,$arrExt)){
        echo "File khong duoc phep chon";
        die;
    }
    $newName = time().'-'.$name;

    move_uploaded_file($tmpName,"images/$newName");
    echo "success";

}


?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="btnUpload">Upload</button>
    </form>

</body>
</html>