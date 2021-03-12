<html>
<head>
    <?php
    session_start();
    ?>
    </head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>BIBIGO_E Mission</h1>
      <div id="grid">
    <ol><strong>Menu for Bibigo<br></strong>
      <?php
        include 'menu.php';
        ?>
    </ol>
    <div id="article">
    <div>
      <button onclick="history.back()">Back</button>
    </div>
    <br>
    
    <div class="tree">
	<ul>
	</ul>
</div>
    <?php
    echo "<u>"."Bibigo proudly spreads Korean food in the world"."</u><br><br>";
    echo "Passion for Korean food delivering to the worldGlobal Korean food brand Bibigo makes new lifestyle by adding modern value to the unique tradition of Korean food."."<br><br>"; 
    echo "Bibigo aims to make healthy food culture by sharing the philosophy of Korean food culture through products and restaurants containing the taste and spirit of Korean food."."<br><br>";
    echo "<b>"."\"He said to them, “Go into all the world and preach the gospel to all creation.\"\""."</b>"." (Mark 16:15)"
    ?>
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