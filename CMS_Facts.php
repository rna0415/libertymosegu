<html>
<head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>BIBIGO_E Facts</h1>
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
    <p><ul><li><b>Fresh Korean Kitchen</b>: Bibigo uses the most tasty and fresh ingredients of the season and cook with Bibigo’s unique but traditional and diverse recipe of Korean food.</li><br>
        <li><b>Healthy & Fresh</b> : Diverse natural ingredients from the west, east, and south coasts and regional recipes. Offering healthy Korean food with ingredients from the nature and cooked by people.</li><br>


        <li><b>Harmony & Balance</b>: Korean food of Bibigo satisfies five senses with colors and tastes and diverse ingredients make balance for perfect harmony.</li><br>

        <li><b>Art of Fermentation</b>: Fermented sauces are representative food of Korea made with beans from the earth and salt from the sea. These foods contain Korean’s lively spirits.</li></ul></p>
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