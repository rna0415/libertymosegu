<html>
<head>

</head>
<style>
p.double {border-style: double;}
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
    <p class="double">
    <?php
    echo "Spreading the taste and excellence of Korean food to the world Global Korean food brand ‘Bibigo’.";
    echo "<br><br>";
    echo "We share the pride of Korean Food, Share Korean Flavor!";
    echo "<br><br>";
    echo $_POST['edit']
    ?>
    
    <?php session_start();
    if ($_SESSION["username"]=="admin"){
    ?>
<form action="CMS_1edit.php">
    <input type="submit" id="edit" value="edit" name="edit" style="float: right;">
</form>
    
        <?php } elseif($_SESSION["username"]=="publisher"){
        ?>
        <form action="CMS_1edit.php">
            <input type="submit" id="edit" value="edit" name="edit" style="float: right;">
        </form>
    
    
    <?php  }else{
    ?>
    <?php } ?>
    
    </p>
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