<html>
<head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>About BIBIGO_E</h1>
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
    echo "Bibigo is the global representative of Korean cuisine that creates a new lifestyle by adding modern values to Korean traditional cuisine.".'<br><br>';

    echo "Bibigo is creating a healthy food culture by sharing with people around the world its pride and understanding of Korean cuisine, a cuisine filled with nature, and life and philosophy of Korean people.".'<br><br>';
    
    echo "Pride of Korean FoodBibigo contains the pride and dream of CJ’s 60 years of history.".'<br><br>';
    echo "CJ started making sugar in 1953 when Korea was under difficult time due to the war and made people to feel happiness with food again.".'<br><br>';
    echo "CJ has developed with Korean food culture since then, Based on the understanding of Korea food for the long past history, CJ has created the global Korean food brand ‘Bibigo.’";

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