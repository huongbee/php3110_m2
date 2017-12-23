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

date_default_timezone_set("Asia/Ho_Chi_Minh");
//unlink('images/download.png');

if(isset($_POST['btnUpload'])){
    $file = $_FILES['image'];  
    // echo "<pre>";  
    // print_r($file);
    // echo "</pre>";
    
    //kiem tra filezise <=1mb
    //chi cho phep upload hinh png, jpg, gif, jpeg
    //rename file
    //neu ma co 1 trong cac file upload ko thanh cong, rollback 
    $size = $file['size'];
    foreach($size as $s){
        if($s>1024*1024){
            die('File too large!');
        }
    }

    $arrExt = ['png', 'jpg', 'gif', 'jpeg'];
    $name = $file['name'];
    foreach($name as $ten){
        $ext = strtolower(pathinfo($ten,PATHINFO_EXTENSION));
        if(!in_array($ext,$arrExt)){
            echo "File khong duoc phep chon";
            die;
        }
    }
    
    //uploadfile
    



    //tmpname, nameFile
    $tmpName = $file['tmp_name'];
    foreach($tmpName as $key=>$tmp){
        $name = $file['name'];
        move_uploaded_file($tmp,"images/".time().'-'.$name[$key]);
    }


}




?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <button type="submit" name="btnUpload">Upload</button>
    </form>

</body>
</html>