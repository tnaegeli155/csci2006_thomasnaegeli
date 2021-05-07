<?php
include 'config.php';
function connectDb($user, $pass, $dbName){
  try{

    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #$sql = "";
    #$result = $pdo->query($sql);
    $pdo = null;
  }
  catch (PDOException $e){
    die ($e->getMessage());
  }
}
function findUser(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql ="SELECT customer_id
    FROM Customer
    WHERE customer_username=? AND customer_passhash=?";

    $result = $pdo->query($sql);
    if($result==null){
      echo '<script>alert("Enter username and password")</script>';
    }elseif($result==$username) {
      $_SESSION['id']=$result.customer_id;
    }else{
      echo '<script>alert("No User Found")</script>';
    }
  }catch(PDOException $e){
    die ($e->getMessage());
  }
}
function nameTaken(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT COUNT(*) as count
    FROM Customer
    WHERE customer_username=?";
    $result = $pdo->query($sql);

  }catch(PDOException $e){
    die ($e->getMessage());
  }
}
function addCustomer(){
  try{
  $pdo = new PDO($dbName,$user,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMORE, PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO Customer
  (customer_username, customer_passhash, customer_fullName, customer_addr)
  VALUES (?,?,?,?)";
  $result= $pdo->query($sql);

}catch(PDOException $e){
  die($e->getMessage());
  }}
function addToCart(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO OrderItem
    (oi_orderNum, oi_customer, oi_artwork, oi_quantity, oi_shippingAddr)
    VALUES (-1, ?, ?, 1, NULL)
    ON DUPLICATE KEY UPDATE oi_quantity=oi_quantity+1";

    $result= $pdo->$query($sql);
  }catch(PDOException $e){
    die ($e->getMessage());
  }
}
function addWishlist(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO WishlistItem
    *wl_customer, wl_artwork)
    VALUES (?,?)
    ON DUPLICATE KEY UPDATE wl_customer=w1_customer";

    $result= $pdo->$query($sql);
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}
function removeFromCart(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="DELETE FROM OrderItem
    WHERE oi_orderNum = -1
    AND oi_customer=?
    AND oi_artwork=?";

    $result = $pdo->$query($sql);
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}
function removeWishlist(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="DELETE FROM WishlistItem
    WHERE wl_customer=?
    AND wl_artwork=?";

    $result = $pdo->$query($sql);
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}
function getNextOrder(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT COUNT(*) as nextOrderNumber
    FROM OrderItem
    WHERE oi_orderNum > -1
    GROUP BY oi_orderNum, oi_customer";

    $result = $pdo->$query($sql);
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}
function markAsOrdered(){
  try{
    $pdo = new PDO($dbName,$user,$pass);
    $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE OrderItem
    SET oi_orderNum=?, oi_shippingAddr=?
    WHERE oi_orderNum= -1
    AND oi_customer=?
    AND oi_artwork=?";

    $result = $pdo->$query($sql);
  }
  catch(PDOException $e){
    die ($e->getMessage());
  }
}
?>
