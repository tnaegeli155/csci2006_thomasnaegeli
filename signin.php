<?php

function findUser(){
  include "config.php";
  $username = $_POST['userName'];
  $password = $_POST['userPass'];
  $userPass = md5($username.'SECRET'.$password);
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT customer_id,customer_username,customer_type
    FROM Customer
    WHERE customer_username = '$username'
    AND customer_passhash = '$userPass'";

    $result = $pdo->query($sql);
    $row = $result->fetch();
    if($row==null){
      echo '<script>alert("Enter username and password")</script>';
      header("Location: artwork.php?q=SignIn");
    }elseif($row['customer_username']==$username) {
      session_start();
      $_SESSION['username']=$row['customer_id'];
      if($row['customer_type']=="seller"){
        $_SESSION['seller']="true";
      }elseif($row['customer_type']!="seller"){
        $_SESSION['seller']="false";
      }
      header("Location: artwork.php");
      echo '<script>alert("sign in success")</script>';
    }else{
      echo '<script>alert("No User Found")</script>';
    }
  }catch(PDOException $e){
    die ($e->getMessage());
  }
}
findUser();
 ?>
