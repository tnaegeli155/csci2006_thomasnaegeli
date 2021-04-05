<?php
function addToCart(){
  include 'config.php';
  session_start();
  $userId = $_SESSION['username'];
  $art = $_GET['q'];
  var_dump($userId);
  var_dump($art);
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO OrderItem
    (oi_orderNum, oi_customer, oi_artwork, oi_quantity, oi_shippingAddr)
    VALUES (-1, '$userId', '$art', 1, 'Default')
    ON DUPLICATE KEY UPDATE oi_quantity=oi_quantity+1";

    $result= $pdo->query($sql);
  }catch(PDOException $e){
    die ($e->getMessage());
  }
}

addToCart();
?>
