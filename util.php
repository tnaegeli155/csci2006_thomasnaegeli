<?php
function connectDb($user, $pass, $dbName){
  try{
    include 'config.php';
    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo '<script>alert("connection success")</script>';
    $sql = "";
    #$result = $pdo->query($sql);
    $pdo = null;
  }
  catch (PDOException $e){
    die ($e->getMessage());
  }
}
?>
