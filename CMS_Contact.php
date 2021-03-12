<html>
<head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Contact to BIBIGO_E</h1>
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
        <?php
        echo "<b>Email</b>: mgu@liberty.edu"."<br><br>";
        echo "<b>Pnumber</b>: 434)849-2669"."<br><br>";
        echo "<b>Address</b>: 1971 University Blvd <br>Lynchburg VA, 24502";
        echo "<br><br>";
        echo "<i>Follow us for more information!</i>";

        ?>
        <br><br><br>
        <a href='https://www.facebook.com' target="_blank"><img src="facebook.png" width=5%></a>
        <a href='https://www.instagram.com' target="_blank"><img src="instagram.png" width=4%></a>

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