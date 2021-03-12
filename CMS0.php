<html>
<head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Welcome to CMS</h1>
      <div id="grid">
    <ol><strong>Menu for Assignemtns<br></strong>
      <br><li><a href="1.html" class="saw" id="active"> Assignment1</a></li>
      <li><a href="2.html" class="saw" id="active"> Assignment2</a></li>
      <li><a href="3.html" class="saw" id="active"> Assignment3</a></li>
      <li><a href="4.html" class="saw" id="active"> Assignment4</a></li>
      <li><a href="5.html" class="saw" id="active"> Assignment5</a></li>
      <li><a href="6.html" class="saw" id="active"> Assignment6</a></li>
      <li><a href="CMS0.php" class="saw" id="active"> CMS</a></li>
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
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

   
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            session_start();
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'customer' && 
                  $_POST['password'] == 'customer') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'customer';
                  
                  header("Location:CMS1.php");
               }
               elseif ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                 
                  header("Location:CMS1.php");
               }
               elseif ($_POST['username'] == 'publisher' && 
                  $_POST['password'] == 'publisher') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'publisher';
                  
                  header("Location:CMS1.php");
               }
               
              
               else {
                  $msg = '<p style="color:red">'.'Invalid login information.'.'</p>';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" action = "" method = "post">
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" name = "username" placeholder = "type username"><br><br>
            <input type = "password" class = "form-control" name = "password" placeholder = "type password"><br><br>
            <button type = "submit" name = "login">Login</button>
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
</html>