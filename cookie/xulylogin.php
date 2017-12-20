<?php
session_start();
if(isset($_POST['btnSend'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password=="111111"){
        //login thanh cong
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        //var_dump($_POST['remember']) ;

        if(isset($_POST['remember'])  && $_POST['remember']==1){
            setcookie('username',$username,time()+120,'http://localhost/php3110_m2/');
            setcookie('password',$password,time()+120,'http://localhost/php3110_m2/');
        }
        header('Location:index.php');
    }
    else{
        echo "Login fail";
    }
}
    
?>