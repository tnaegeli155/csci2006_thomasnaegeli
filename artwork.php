<?php require 'util.php';
connectDb($user, $pass, $dbName);
session_start();
?>
<?php
include 'classes.php';
function getTitle(){
  echo "<title>Lebrun - Self-portrait in a Straw Hat</title>";
}
function getBody(){
  echo '<body>
      <header>
      '.getBanner().navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>
      <main>
          <article class="artwork">
              <h2 class="art_title">Self-portrait in a Straw Hat</h2>
              <p class="artist">By <a href="#">Louise Elisabeth Lebrun</a></p>
              <figure><img src="artwork/medium/13.jpg" alt="Self-portrait in a Straw Hat" title="Self-portrait in a Straw Hat">
                  <figcaption>
                      <p>The painting appears, after cleaning, to be an autograph replica of a picture, the original of which was painted in Brussels in 1782 in free imitation of Rubens’s ’Chapeau de Paille’, which LeBrun had seen in Antwerp. It was
                          exhibited in Paris in 1782 at the Salon de la Correspondance. LeBrun’s original is recorded in a private collection in France.</p>
                      <p class="list_price">$700</p>
                      <div class="actions">';
                      if(isset($_SESSION['username'])){echo '<a href="addwish.php?q=Self-portrait in a Straw Hat">Add to Wish List</a>';}
                      echo ' <a href="addcart.php?q=Self-portrait in a Straw Hat">Add to Shopping Cart</a></div>
                      <table class="artwork_info">
                          <caption>Product Details</caption>
                          <tbody>
                              <tr>
                                  <td class="facet">Date:</td>
                                  <td class="value">1782</td>
                              </tr>
                              <tr>
                                  <td class="facet">Medium:</td>
                                  <td class="value">Oil on canvas</td>
                              </tr>
                              <tr>
                                  <td class="facet">Dimension:</td>
                                  <td class="value">98cm x 71cm</td>
                              </tr>
                              <tr>
                                  <td class="facet">Home:</td>
                                  <td class="value"><a href="#">National Gallery, London</a></td>
                              </tr>
                              <tr>
                                  <td class="facet">Genres:</td>
                                  <td class="value"><a href="#">Realism</a>, <a href="#">Rococo</a></td>
                              </tr>
                              <tr>
                                  <td class="facet">Subjects:</td>
                                  <td class="value"><a href="#">People</a>, <a href="#">Arts</a></td>
                              </tr>
                          </tbody>
                      </table>
                  </figcaption>
              </figure>
          </article>
          <h2>Similar Artwork</h2>
          <article class="related">
              <div class="relatedArt">
                  <figure><img src="artwork/small/293.jpg" alt="Still Life with Flowers in a Glass Vase" title="Still Life with Flowers in a Glass Vase">
                      <figcaption>
                          <p><a href="#293">Still Life with Flowers in a Glass Vase</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a> ';
                  if(isset($_SESSION['username'])){
                    echo '<a href="addwish.php?q=Still Life with Flowers in a Glass Vase">Wish</a>';}
                  echo ' <a href="#">Cart</a></div>
              </div>
              <div class="relatedArt">
                  <figure><img src="artwork/small/183.jpg" alt="Portrait of Alida Christina Assink" title="Portrait of Alida Christina Assink">
                      <figcaption>
                          <p><a href="#183">Portrait of Alida Christina Assink</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a> ';
                  if(isset($_SESSION['username'])){
                    echo '<a href="addwish.php?q=Portrait of Alida Christina Assink">Wish</a>';}
                  echo ' <a href="#">Cart</a></div>
              </div>
              <div class="relatedArt">
                  <figure><img src="artwork/small/820.jpg" alt="Self-portrait" title="Self-portrait">
                      <figcaption>
                          <p><a href="#820">Self-portrait</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a> ';
                  if(isset($_SESSION['username'])){
                    echo '<a href="addwish.php?q=Self-portrait">Wish</a>';}
                  echo ' <a href="#">Cart</a></div>
              </div>
              <div class="relatedArt">
                  <figure><img src="artwork/small/374.jpg" alt="William II, Prince of Orange, and his Bride, Mary Stuart" title="William II, Prince of Orange, and his Bride, Mary Stuart">
                      <figcaption>
                          <p><a href="#374">William II, Prince of Orange, and his Bride, Mary Stuart</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a> ';
                  if(isset($_SESSION['username'])){
                    echo '<a href="addwish.php?q=William II, Prince of Orange, and his Bride, Mary Stuart">Wish</a>';}
                  echo ' <a href="#">Cart</a></div>
              </div>
              <div class="relatedArt">
                  <figure><img src="artwork/small/849.jpg" alt="Milkmaid" title="Milkmaid">
                      <figcaption>
                          <p><a href="#849">Milkmaid</a></p>
                      </figcaption>
                  </figure>
                  <div class="actions"><a href="#">View</a> ';
                  if(isset($_SESSION['username'])){
                    echo '<a href="addwish.php?q=Milkmaid">Wish</a>';}
                  echo ' <a href="#">Cart</a></div>
              </div>
          </article>
      </main>
      <footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>

  </body>';
}
function accountDetails(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      try{
        include 'config.php';

        $search = $_SESSION['username'];
        $pdo = new PDO($dbName,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT *
        FROM Customer
        WHERE customer_id='$search'";

        $result = $pdo->query($sql);
        $row = $result->fetch();

        echo '<p>UserName: '.$row['customer_username'].'</p>';
        echo '<p>Password Hashed: '.$row["customer_passhash"].'</p>';
        echo '<p>Full Name: '.$row["customer_fullName"].'</p>';
        echo '<p>Address: '.$row["customer_addr"].'</p>';
      }catch(PDOException $e){
        die ($e->getMessage());
      }
  echo '<main><form action="update.php" name="modify" onsubmit="return validateModify()" method="post">';
  echo '<label>Name: </label>';
  echo '<input type="text" name="Name" value="Name"><br>';
  echo '<label>Username: </label>';
  echo '<input type="text" name="Username" value="Username"><br>';
  echo '<label>Password: </label>';
  echo '<input type="text" name="Password" value="Password"><br>';
  echo '<label>Address: </label>';
  echo '<input type="text" name="address1" value="Address"><br>';
  echo '<input type="text" name="address2" value="Apt or Unit"><br>';
  echo '<label>City: </label>';
  echo '<input type="text" name="City" value="City"><br>';
  echo '<label>State: </label>';
  echo '<input type="text" name="state" value="State"><br>';
  echo '<label>ZIP: </label>';
  echo '<input type="text" name="Zip" value="Zip"><br>';
  echo '<input type="submit" name="Save Changes" value="Save Changes">';
  echo '</form></main>';
  echo '<footer>
      <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
  </footer>
</body>';}
function aboutUs(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      echo '<main>
      <p>This website allows you to browse and add pieces of artwork to your cart to purchase.
       All purchases will go to charities to help new upcoming artists get spots in galleries to become known.</p></main>
       <footer>
           <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
       </footer>
       </body>';
}
function artistList(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      echo '<main><h1>List of Artists</h1><br><p>Artist Name followed by their ID number</p>';
      Artist::listArtist();
      echo '</main><footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>
      </body>';
}
function artworkList(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      echo '<main><h1>List of Artwork</h1><br><p>Artwork Name followed by the info and ID</p>';
      Artwork::listArtwork();
      echo '</main><footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>
      </body>';
}
function wishList(){

}
function navbar(){
  if(isset($_SESSION['username'])){
    echo '<nav class="user">
        <ul>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="http://localhost/artwork.php?q=myAccount">My Account</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Shopping Cart</a></li>';
            if($_SESSION['seller']=="true"){
              echo '<li><a href="artwork.php?q=addArt">Add Art</a></li>';
            }
    echo '</ul>
    </nav>';
  }else{
    echo '<nav class="user">
        <ul>
            <li><a href="artwork.php?q=SignIn">Sign-in</a></li>
            <li><a href="artwork.php?q=SignUp">Sign-up</a></li>
            <li><a href="#">Shopping Cart</a></li>
        </ul>
    </nav>';
  }
}
function signIn(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      echo '<main><h1>Sign In</h1>
      <form method="post" action="signin.php">
      <label>Enter Username: </label>
      <input type="text" id="userName" name="userName" required><br>
      <label>Enter Password: </label>
      <input type="password" id="userPass" name="userPass" required><br>
      <input type="submit" name="submit" id="submit"><br>
      </form>
      <h1><a href="artwork.php">logout</a></h1>';
      echo '</main><footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>
    </body>';
}
function signUp(){
  echo '<body>
      <header>
      '.navbar().'
          <h1>Art Store</h1>
          <nav>
              <ul>
              <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
              <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
              <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
              <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
              </ul>
          </nav>
      </header>';
      echo '<main><h1>Sign Up</h1>
      <form method="post" action="signup.php">
      <label>Enter Username: </label>
      <input type="text" id="userName" name="userName" required><br>
      <label>Enter Password: </label>
      <input type="password" id="userPass" name="userPass" required><br>
      <label>Full Name: </label>
      <input type="text" id="fullName" name="fullName" required><br>
      <label>Address: </label>
      <input type="text" id="address" name="address" required><br>
      <label>Seller? </label>
      <input type="checkbox" id="seller" name="seller" value="seller"><br>
      <input type="submit" name="submit" id="submit"><br>
      </form>
      <h1><a href="artwork.php">logout</a></h1>';
      echo '</main><footer>
          <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
      </footer>
    </body>';
}
function addArt(){
  if($_SESSION['seller']!="true"){
    echo '<h1>Access to page Denied</h1>
    <h3><a href="artwork.php">Return</a></h3>';
  }else{
    echo '<body>
        <header>
        '.navbar().'
            <h1>Art Store</h1>
            <nav>
                <ul>
                <li><a href="http://localhost/artwork.php?q=Home">Home</a></li>
                <li><a href="http://localhost/artwork.php?q=About">About Us</a></li>
                <li><a href="http://localhost/artwork.php?q=Artwork">Art Works</a></li>
                <li><a href="http://localhost/artwork.php?q=Artist">Artists</a></li>
                </ul>
            </nav>
        </header>';
    echo '<main><h1>Adding Art Page</h1>
    <form action="addart.php" name="addart" method="post">';
    echo '<label>Art Name: </label>';
    echo '<input type="text" name="Name" value="Name"><br>';
    echo '<label>Price : $ </label>';
    echo '<input type="text" name="Price" value="Price"><br>';
    echo '<label>Password: </label>';
    echo '<input type="textfield" name="Descripion" value="Description"><br>';
    echo '<label>Image</label>';
    echo '<input type="file" name="imageSource" id="imageSource"><br>';
    echo '<input type="submit" name="Save Changes" value="Save Changes">';
    echo '</form>';
    echo '</main><footer>
        <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
    </footer>
  </body>';
  }
}
function getBanner(){
  $pictureList=array();
  for($i=1;$i<58;$i++){
    $pictureList[$i]='/artwork/medium/'.$i.'.png';
  }
  $pictureSrc=rand(1,57);
  echo '<div id="bannerImage" style="width:100%;max-height:300px;">
  <script>
  var elem=document.createElement("img");
  elem.setAttribute("id", "flip");
  elem.setAttribute("src", "/artwork/medium/'.$pictureSrc.'.png");
  elem.setAttribute("height", "200");
  elem.setAttribute("width", "100%");
  elem.setAttribute("alt", "Arts");
  document.getElementById("bannerImage").appendChild(elem);
  setInterval(function(){
    var location = "/artwork/medium/"
    var update = Math.floor(Math.random()*57)+1;
    var filetype = ".png";
  document.getElementById("flip").src=location+update+filetype
},3500);</script></div>';}
?>
<script type="text/javascript">
function validateModify(){
var checkName = document.forms["modify"]["Name"].value;
var checkPass = document.forms["modify"]["Password"].value;
var passCode = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20})/;
var nameCode = /\s/;
if(nameCode.test(checkName)!=true){
  alert("Name needs to include a space");
  return false;
}
if(passCode.test(checkPass)!=true){
  alert("Password does not match requirements");
  return false;
}
alert("Changes saved");
}


</script>
<!DOCTYPE html>
<style>
html {
  background-color:blue;
}
nav{
  background-color:white;
}
header {
  background-color:lightblue;
}
main {
  background-color:grey;
}
footer{
  background-color:red;
}
</style>
<?php
$check = isset($_GET['q']);
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php getTitle()?>

</head>
  <?php
  if($check==false){
    getBody();
  }else{
  $query = $_GET['q'];
  if($query=="myAccount"){
    accountDetails();
  }elseif($query=="Home"){
    getBody();
  }elseif($query=="About"){
    aboutUs();
  }else if($query=="Artist"){
    artistList();
  }else if($query=="Artwork"){
    artworkList();
  }else if($query=="SignUp"){
    signUp();
  }else if($query=="SignIn"){
    signIn();
  }else if($query=="addArt"){
    addArt();
  }
}?>

</html>
