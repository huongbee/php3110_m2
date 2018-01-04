<?php

try{
    ///mysql
    //$s = new mysqli();
    
    $dbh = new PDO('mysql:host=localhost;dbname=php3110', 'root', '');
    //new PDO('pgsql:host=localhost;dbname=test_basic01', $user, $pass);
    $dbh->exec("SET NAMES UTF8");
}   
catch(PDOException $e){
    echo "Lỗi";
    echo $e->getMessage();
}

// $sql = "UPDATE customer SET name='Khoa Pham' WHERE id=5";
// $result =  $dbh->exec($sql);
//$result = $dbh->rowCount();

// if($result){
//     echo 'success';
// }
// else{
//     echo "fail";
// }

//var_dump($dbh);


//select
// $sql = "SELECT * FROM customer";
// $stmt = $dbh->prepare($sql);
// $check = $stmt->execute();
// if($check){
//     //$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     //$datas = $stmt->fetchAll(PDO::FETCH_NUM);

//     //$datas = $stmt->fetchAll(PDO::FETCH_BOTH);
//     $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
//     // echo "<pre>";
//     // print_r($datas);
//     // echo "</pre>";

//     foreach($datas as $cus){
//         echo $cus->name.' ---- '. $cus->email;
//         echo '<br>';
//     }   
// }
// else{
//     echo "Error!!!";
// }


// $sql = "INSERT INTO customer(`name`,`gender`,`email`,`address`,phone_number,note) VALUES(?,?,?,?,?,?)";

// $stmt = $dbh->prepare($sql);

// $name = "KPT";
// $gender = 'nam';

// $email = "khoa5@gmail.com";

// $checkMail = preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-z]{2,5}/',$email);
// if($checkMail){
//     echo 'Email valid!';
// }
// else{
//     die('Email invalid!');
// }

// $address = '90-22 LTR';
// $phone = '0987654322';
// $note = 'ghi chu';

// $stmt->bindParam(1,$name);
// $stmt->bindParam(2,$gender);
// $stmt->bindParam(3,$email);
// $stmt->bindParam(4,$address);
// $stmt->bindParam(5,$phone);
// $stmt->bindParam(6,$note);

// $sql = "INSERT INTO customer(`name`,`gender`,`email`,`address`,phone_number,note) VALUES(:name, :gender, :email, :add , :phone, :note)";
// $stmt = $dbh->prepare($sql);

// $stmt->bindParam(':name',$name);

// $stmt->bindParam(':gender',$gender,PDO::PARAM_STR);
// $stmt->bindParam(':email',$email);
// $stmt->bindParam(':add',$address);
// $stmt->bindParam(':phone',$phone);
// $stmt->bindParam(':note',$note);

$sql = "UPDATE customer SET email=?";
$stmt = $dbh->prepare($sql);

$email = "khoa0009@gmial.com";
$id = 13;
$stmt->bindParam(1,$email);
//$stmt->bindParam(2,$id);

$check = $stmt->execute();
if($check){
    //echo $id = $dbh->lastInsertId();// recent insert id
    echo $stmt->rowCount(); 
}
else{
    echo "Error!!!!";
}


//INSERT /UPDATE/DELETE no parameter
 //$dbh->exec($sql)


//  INSERT /UPDATE/DELETE have parameters  || SELECT
// $stmt->prepare($sql)
// $stmt->bindParam(....);
// $stmt->execute();

// SELECT 
//$stmt->prepare($sql)
// $stmt->bindParam(....);
// $stmt->execute();
//$data = $stmt->fetchAll();


unset($dbh);
//$dbh = NULL;

$sql = "UPDATE customer SET name='Khoa Pham' WHERE";
$result =  $dbh->exec($sql);
echo $result;