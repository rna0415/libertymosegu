<html>
<head>
</head>
<title>Admin</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Welcome, BIBIGO_E Admin</h1>
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
    <br><br>
        <?php
        include "CMS_table.php";
        
         
        ?>

        
        <br><br>
        <form action="CMS_Reset.php">
            <input type="submit" name ="reset" value = "reset">
        </form>
        <br><br>
    <form name="data" action="CMS_database.php" method="post">
        Userinfo:<input type="text" id="userinfo" name="userinfo" class="topAlign" value="" required="">
        <br><br>
        Contact:<input type="text" id="contact" name="contact" class="topAlign" value="" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        <br><br>
        Username:<input type="text" id="username" name="username" maxlength="50" value="" required="">
        
        <input type="submit" name = "createuser" value="CreateUser">
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