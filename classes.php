<?php
class Data{
  abstract function queryData($int);
  abstract function updateRow($array);
  abstract function newEntry();
  abstract function deleteEntry();
  function registerChange(){

  }
  function save(){

  }
  function delete(){

  }

}

class Artwork extends Data{
  function queryData($int){
    "Object checks for some query to decide where object will be placed
    in array (type: Artwork; id:$int)";
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
  function queryData($int){
    "Object checks for some query to decide where object will be placed
    in array (type: Artist; id:$int)";
  }
  function updateRow($array){
    "uses array to update row of artists Table=>new Entry";
  }
  function newEntry(){
    "Array of artist =>New Artist to add";
  }
  function deleteEntry(){
    "search array for artist, then remove Array(index)=>deleteEntry";
  }
}
?>
