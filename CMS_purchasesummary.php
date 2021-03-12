<html>
<head><?php session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions

//Define the products and cost
$products = array("Dumpling", "Soup", "Kimchi", "Rice", "K_Style Hamburger Steak", "Port cutlet", "Noodle", "Ramen", "K_Style Meatball", "K_Style Chicken");
$amounts = array("9.99", "5.99", "3.99", "2.99", "1.99", "8.99", "9.99", "5.99", "4.99", "14.99");

//Load up session

 ?>

     <?php
     if ( isset($_SESSION["cart"]) ) {
     ?>
     <?php
     $total = 0;
     foreach ( $_SESSION["cart"] as $i ) {
     ?>
     <?php
     $total = $total + $_SESSION["amounts"][$i];
     }
     $_SESSION["total"] = $total;
     ?>
</head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>BIBIGO_E Purchased Summary</h1>
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
        echo 'Thank you for shopping with us, '.'<b>'.$_GET['fname'].' '.$_GET['lames'].'</b>!';
        echo '<br>';
        echo '<br>';
        echo 'Customer info: '.'<b>'.$_GET['email'].'</b>'.', '.'</b><b>'.$_GET['pnumber'].'</b>'.', '.'<b>'.$_GET['address1'].'</b>'.', '.'<b>'.$_GET['address2'].'</B>'.', '.'<b>'.$_GET['city'].'</b>'.', '.'<b>'.$_GET['state'].'</b>'.', '.'<b>'.$_GET['zcode'].'</b>';
        echo '<br>';
        echo'<br>';
    ?>
        <?php echo '<b>'.'$'.number_format($total+($total*0.065),2).'</b>'.' purchased.'; ?>
 <?php
 }
 ?>
    
    <br><br>
    <a href="CMS1.php">Back to Homepage</a>
    <br><br>
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