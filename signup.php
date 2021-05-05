<?php

function addCustomer($userName, $userPass, $fullName, $address, $seller){
  include 'config.php';
  try{
  $pdo = new PDO($dbName,$user,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO Customer
  (customer_username, customer_passhash, customer_fullName, customer_addr,customer_type)
  VALUES ('$userName','$userPass','$fullName','$address', '$seller')";
  $result= $pdo->query($sql);
  $row=$result->fetch();
  session_start();
  $_SESSION['username']=$row['customer_id'];
  if($_POST['seller']=="true"){
  }
  header("Location: artwork.php");
  echo '<script>alert("User Added")</script>';
}catch(PDOException $e){
  die($e->getMessage());
  }
}

function nameTaken(){
  include 'config.php';
  try{
    $username = $_POST['userName'];
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT COUNT(*) as count
    FROM Customer
    WHERE customer_username='$username'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    if($row['count']==0){
      $password = $_POST['userPass'];
      $userPass = md5($username.'SECRET'.$password);
      $fullName=$_POST['fullName'];
      $address=$_POST['address'];
      $type=$_POST['seller'];
      addCustomer($username, $userPass, $fullName,$address,$type);
    }else{
      header("Location: artwork.php?q=SignUp");
      echo '<script>alert("username is already taken")</script>';
    }
    }
    catch(PDOException $e){
    die ($e->getMessage());
  }
}


$userExsist = nameTaken();
 ?>
