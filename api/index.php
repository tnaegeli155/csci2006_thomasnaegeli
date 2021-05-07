<!DOCTYPE html>
<?php include 'util.php';?>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<title>API</title>
</head>
<body>
	<?php
	echo '<form method="get" action="/api.php">';
	echo '<label>Artwork Number:</label>';
	echo '<select id="artwork" name="artwork">';
	for($i=1;$i<58;$i++){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo '</select><br><br>';
	echo '<label>Artist Number:</label>';
	echo '<select id="artist" name="artist">';
	for($i=1;$i<31;$i++){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo '</select><br>';echo '</form>';?>
	<p>Select an artwork number to get info, and for artists info select their artist id</p>
	<br>
	<h1>Information</h1>
	<h2>Artwork Info</h2>
	<div id="artworkInfo">

	</div>

<h2>Artist Info</h2>
	<div id="artistInfo">
	</div>
	<script>
	var artworkChange = document.getElementById("artwork");
	artworkChange.addEventListener("change", function(){
		var e = document.getElementById("artwork");
		var out = e.value;
		$.get("/api.php?artwork="+out, function(data, status){
			if(status=="success"){
				console.log(data);
				var outbound=JSON.stringify(data);
				outbound=JSON.parse(outbound);
				document.getElementById("artworkInfo").innerHTML=outbound;
			}else{
				alert("fail");
			}
		});
	});

	var artistChange = document.getElementById("artist");
	artistChange.addEventListener("change", function(){
		var e = document.getElementById("artist");
		var out = e.value;
		$.get("/api.php?artist="+out, function(data, status){
			if(status=="success"){
				console.log(data);
				var outbound=JSON.stringify(data);
				outbound=JSON.parse(outbound);
				document.getElementById("artistInfo").innerHTML=outbound;
			}else{
				alert("fail");
			}
		});
	});
	</script>
</body>
</html>
