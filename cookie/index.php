<?php
session_start();


// setcookie('username','admin',time()+120);
// echo $_COOKIE['username'];
// setcookie('username','',time()-120)

// if(($_SESSION['username'] == "admin" && $_SESSION['password'] == "111111") || ($_COOKIE['username']== "admin" && $_COOKIE['password'] == "111111")){

//     echo "Hom nay co 2 don hang moi";
//     echo $_SESSION['username'];
// }
// if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
//     header('Location:login.php');
// }
// elseif(!isset($_COOKIE['username']) || !isset($_COOKIE['password'])){
//     header('Location:login.php');
// }
    $flag = false;
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if($_SESSION['username'] != "admin" || $_SESSION['password'] != "111111"){
            header('Location:login.php');
        }
        else $flag = true;
    }
    elseif(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        if($_COOKIE['username'] != "admin" || $_COOKIE['password'] != "111111"){
            header('Location:login.php');
        }
        else{
            $flag = true;
            setcookie('username',"admin",time()+120,'http://localhost/php3110_m2/');
            setcookie('password',"111111",time()+120,'http://localhost/php3110_m2/');
            $_SESSION['username'] = $_COOKIE['username'];
            $_SESSION['password'] = $_COOKIE['password'];
        }
    }

    if($flag){
        echo "Hom nay co 2 don hang moi";
        echo $_SESSION['username'];
        echo "<a href='logout.php'>Logout</a>";
    }
    else 
        header('Location:login.php');

?>