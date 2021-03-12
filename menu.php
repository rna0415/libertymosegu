<html>
<head>
</head>
<body>
      <?php
        session_start();
            if ($_SESSION["username"]=="admin"){ ?>
              <br><li><a href="CMS1.php" class="saw" id="active"> HOME</a></li>
              <li><a href="CMS_About.php" class="saw" id="active"> About us</a></li>
              <li><a href="CMS_Mission.php" class="saw" id="active"> Mission</a></li>
              <li><a href="CMS_Facts.php" class="saw" id="active"> Facts</a></li>
              <li><a href="CMS_Biographies.php" class="saw" id="active"> Biographies</a></li>
              <li><a href="CMS_Contact.php" class="saw" id="active"> Contact</a></li>
              <li><a href="CMS_Store.php" class="saw" id="active"> Store</a></li>
              <li><a href="CMS_Management.php" class="saw" id="active"> Admin</a></li>
          <?php
          }
          else
            { 
            ?>
              <br><li><a href="CMS1.php" class="saw" id="active"> HOME</a></li>
              <li><a href="CMS_About.php" class="saw" id="active"> About us</a></li>
              <li><a href="CMS_Mission.php" class="saw" id="active"> Mission</a></li>
              <li><a href="CMS_Facts.php" class="saw" id="active"> Facts</a></li>
              <li><a href="CMS_Biographies.php" class="saw" id="active"> Biographies</a></li>
              <li><a href="CMS_Contact.php" class="saw" id="active"> Contact</a></li>
              <li><a href="CMS_Store.php" class="saw" id="active"> Store</a></li>
            <?php
           }
            ?>
 </body>