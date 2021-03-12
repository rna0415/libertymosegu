<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Welcome BIBIGO_E Admin</h1>
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
        include "CMS_table.php"
        ?>
    <br>
    <br>
    <form action="CMS_Management.php" style=" text-align: right">
        <input type="submit" id="adminc" value="manage" name="manage">
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
       <div>
       <?php
  include 'footer.php';
 ?>
      </footer>
 </body>