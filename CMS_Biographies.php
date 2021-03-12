<html>
<head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>BIBIGO_E Founder</h1>
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
    <img src="me.jpg" width=25%>
    <br>
    <?php
    echo "Founder of Bibigo E-commercial"."<br><br>";
    echo "Mose Gu is 24 years old and student of Liberty University"."<br><br>";
    echo "Mose Gu was born in Korea and currently living in Busan, Korea"."<br><br>";
    echo "Mose Gu has a passion to spread the Korean culture to Global world"."<br><br>";
    echo "Mose Gu's favorite verse is John 3:16.";

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