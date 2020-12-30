<?php
require_once "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['submit'])){
    if(empty($username) || empty($password)){
        header('Location: login.php');
        exit; 
    }else{
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($row['username']=== $username && $row['password']){
            $_SESSION['username']= $row['username'];
            header('Location: welcome.php');
            exit; 
        }else{
            header('Location: login.php');
            exit; 
        }
    }
}





