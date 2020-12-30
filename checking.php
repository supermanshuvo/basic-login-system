<?php
require_once "config.php";

// Getting Data From File and checking correction

$user = $_POST['username'];
$password = $_POST['password'];
$conpass = $_POST['confirm_password'];

if(isset($_POST['submit']))
{
  if(empty($user) || empty($password)){
    header('Location:register.php');
  }else{
    if($password !== $conpass){
        header('Location: register.php');
        exit;
    }
      $sameUser = "SELECT * FROM users WHERE username = '$user'";
      $result = mysqli_query($conn,$sameUser);
      $num = mysqli_num_rows($result);
    if($num>0){
        header('Location: register.php');
        exit;
    }else{
        $reg = "INSERT INTO users(username, password) VALUE('$user','$password')";
        mysqli_query($conn,$reg);
        header('Location: login.php');
        exit; 
    }
  }

}