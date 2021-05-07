<?php
if(isset($_GET['artwork'])){
  include 'config.php';
  $num = $_GET['artwork'];
  try{

    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT *
    FROM artwork
    WHERE artwork_id='$num'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    $pdo = null;
    echo 'Artwork Id: '.$row['artwork_id'].'<br>
    Artwork Artist: '.$row['artwork_artist'].'<br>
    Artwork Name: '.$row['artwork_name'].'<br>
    Artwork Reprint: $'.$row['artwork_reprintPrice'].'<br>
    Artwork Description: '.$row['artwork_desc'].'<br>';
    }
  catch (PDOException $e){
    die ($e->getMessage());
  }
}
if(isset($_GET['artist'])){
  include 'config.php';
  $num = $_GET['artist'];
  try{

    $pdo = new PDO($dbName,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT artist_fullName
    FROM artist
    WHERE artist_id='$num'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    echo $row['artist_fullName'].'<br><br>';

    $sql = "SELECT *
    FROM artwork
    WHERE artwork_artist='$num'";
    $result = $pdo->query($sql);
    while($row = $result->fetch()){
      echo $row['artwork_name'];
      echo '<br>';
    }
    $pdo = null;

    #echo 'Artist Id: '.$row['artist_id'].'<br>
    #Artist Name: '.$row['artist_fullName'].'<br>
    #Artist Born: '.$row['artist_born'].'<br>
    #Artist Death: $'.$row['artist_died'].'<br>
    #Artist Birth Country: '.$row['artist_origin'].'<br>
    #Artist Influence: '.$row['artist_influence'].'<br>
    #Artist Description: '.$row['artist_desc'];
    }
  catch (PDOException $e){
    die ($e->getMessage());
  }
}
?>
