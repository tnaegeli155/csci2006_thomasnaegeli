<?php
abstract class Data{
  abstract function queryData($int);
  #abstract function updateRow($array);
  #abstract function newEntry();
  #abstract function deleteEntry();
  function registerChange(){

  }
  function save(){

  }
  function delete(){

  }

}

class Artwork extends Data{
  static function listArtwork(){
    try{
      include 'config.php';
      $pdo = new PDO($dbName, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT *
        FROM artwork
        ORDER BY artwork_id";

        $result = $pdo->query($sql);
        while($row = $result->fetch()){
          echo $row['artwork_name'].' '.$row['artwork_desc'].': ID='.$row['artwork_id'].'<br/><br/>';
        }}catch (PDOException $e){
          die ($e->getMessage());
        }
  }
  function queryData($int){
    $sql = "SELECT *
    FROM artwork
    WHERE artwork_id = $int";
    $result = $pdo->query($sql);
    if($sql == null){
      newEntry();
  }else{
    updateRow($result);
  }
}
  function updateRow($array){
    "uses array to update row of pictures Table=>new Entry";
  }
  function newEntry(){
    "Array of artwork =>New Artwork to add";
  }
  function deleteEntry(){
    "search array for artwork, then remove Array(index)=>deleteEntry";
  }
}
class Artist extends Data{
  static function listArtist(){
    try{
      include 'config.php';
      $pdo = new PDO($dbName, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT *
        FROM artist
        ORDER BY artist_id";

        $result = $pdo->query($sql);
        while($row = $result->fetch()){
          echo $row['artist_fullName'].' '.$row['artist_lastName'].': ID='.$row['artist_id'].'<br/>';
        }}catch (PDOException $e){
          die ($e->getMessage());
        }
  }

  function queryData($int){
    $sql = "SELECT *
    FROM artist
    WHERE artist_id = $int";
    $result = $pdo->query($sql);
    if($result == null){
      newEntry();
    }else{
      updateRow($result);
    }
  }
  function updateRow($array){
    $sql = "INSERT INTO artist (artist_fullName, artist_lastName, artist_born,
    artist_died,artist_origin, artist_influence, artist_desc)
    VALUES ($array[first_name], $array[last_name], $array[artist_born],
    $array[artist_died], $array[artist_origin], $array[artist_influence],
  $array[artist_desc])";
  $pdo->query($sql);
  }
  function newEntry(){
    "Array of artist =>New Artist to add";
  }
  function deleteEntry(){
    "search array for artist, then remove Array(index)=>deleteEntry";
  }
}
?>
