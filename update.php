<?php
function updateDb(){
  session_start();
  $id=$_SESSION["username"];
  $updateName=$_POST['Name'];
  $updatePass=$_POST["Password"];
  $updatePass = md5($id.'SECRET'.$updatePass);
  $updateAddress=$_POST["address1"];

  include 'config.php';
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE Customer
    SET customer_passhash='$updatePass', customer_fullName='$updateName', customer_addr='$updateAddress'
    WHERE customer_id = '$id'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    header("Location: artwork.php?q=myAccount");
    }
    catch(PDOException $e){
    die ($e->getMessage());
  }
}

updateDb();
?>
