<html>
<head>
<style>
#headers {
  padding: 25px;
  background: url(bibi.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}
</style>
</head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Welcome to BIBIGO_E</h1>
      <div id="grid">
    <ol><strong>Menu for Bibigo<br></strong>
      <!--<br><li><a href="CMS1.php" class="saw" id="active"> HOME</a></li>-->
      <!--<li><a href="CMS_About.php" class="saw" id="active"> About us</a></li>-->
      <!--<li><a href="CMS_Mission.php" class="saw" id="active"> Mission</a></li>-->
      <!--<li><a href="CMS_Facts.php" class="saw" id="active"> Facts</a></li>-->
      <!--<li><a href="CMS_Biographies.php" class="saw" id="active"> Biographies</a></li>-->
      <!--<li><a href="CMS_Contact.php" class="saw" id="active"> Contact</a></li>-->
      <!--<li><a href="CMS_Store.php" class="saw" id="active"> Store</a></li>-->
      <?php
        include 'menu.php';
        ?>
    </ol>

    <div id="article">
    <div>
      <button onclick="history.back()">Back</button>
    </div>
    <div id="headers">
        <img src="bibigo.png">
	</div>

    
    <br>
    
    <div class="tree">
	<ul>
	</ul>
</div>
    <h2>Edit homepage</h2>
<p>Welcome, <b><?php session_start(); echo $_SESSION["username"]; ?></b>!</p>

    <form action="CMS1.php" method="POST">
  <textarea name="edit" rows="10" cols="30">Spreading the taste and excellence of Korean food to the world
  Global Korean food brand ‘Bibigo’. 
  <br><br>
  We share the pride of Korean Food, Share Korean Flavor!
  <br><br>
  </textarea>
  <br><br>
  <input type="submit">
    </form>
    <br>
    <br>
    <footer><div>  <form action="CMS-1.php">
 <input type="submit" id="logout" value="logout" name="logout">
</form>
    </div>
     </div>
    </div>


      <footer>
       <!--<div style="background-color: #6fb544 ; color: #ffffff">  -->
       <?php
  include 'footer.php';
 ?>
      </footer>
 </body>