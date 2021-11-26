<?php
include './../database/db.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "Update user set username='$name' , email = '$email' , password = '$password' where id = '$id'" ;


    $result = mysqli_query($con,$sql);

    if($result){
        header('Refresh: 0; URL = ../index.php');
    }
    else{
        echo "error";
    }
}

