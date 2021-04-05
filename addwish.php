<?php
function addWishlist(){
  try{
    session_start();
    include 'config.php';
    $artId = $_GET['q'];
    $customerId=$_SESSION['username'];
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump($customerId);
var_dump($artId);
    $sql="INSERT INTO WishlistItem
    (wl_customer, wl_artwork)
    VALUES ($customerId,'$artId')
    ON DUPLICATE KEY UPDATE wl_customer=w1_customer";

    $result= $pdo->query($sql);

    echo '<script>alert("Added to wishlist")</script>';
    header("Location: artwork.php");
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}

addWishlist();
?>
