<?php
#will be updated to use query search to create picture array from database
#once database is created
$pictures = array('artwork/medium/13.jpg','artwork/medium/183.jpg'
,'artwork/medium/293.jpg','artwork/medium/374.jpg',
'artwork/medium/820.jpg','artwork/medium/849.jpg');
function outputImageSrc(){
$outputPicture = array_rand($pictures, 1);
return $pictures[$outputPicture];
}?>
<style>
#banner{
  display:block;
  margin-left:auto;
  margin-right:auto;
width:70%;
height: 300px;
}
</style>

<!DOCTYPE html>
<html>
<body onload = "startBanner()">
  <figure>
    <img id="banner" src="<?php echo $pictures[0];?>" alt="database">

    <script type="text/javascript">
    function startBanner(){
      setInterval(changeImage(), 3000);
    }
    function changeImage(){
      var picture = document.getElementById("img");
      picture.src = <?php echo outputImageSrc()?>;
    }
    </script>
  </figure>
</body>
</html>
