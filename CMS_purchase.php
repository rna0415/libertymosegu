<html>
<head>

</head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>Purchase BIBIGO_E</h1>
      <div id="grid">
    <ol><strong>Menu for Bibigo<br></strong>
      <?php
        include 'menu.php';
        ?>
    </ol>
    <div id="article">
    <div>
      <button onclick="history.back()">Continue Shopping</button>
    </div>
    <br>
    
    <div class="tree">
	<ul>
	</ul>
</div>
<?php session_start();
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
     <br/><br/><br/>
     <h2>Cart</h2>
     <table>
     <tr>
     <th>Product</th>
     <th width="10px">&nbsp;</th>
     <th>Qty</th>
     <th width="10px">&nbsp;</th>
     <th>Amount</th>
     <th width="10px">&nbsp;</th>
     </tr>
     <?php
     $total = 0;
     foreach ( $_SESSION["cart"] as $i ) {
     ?>
     <tr>
     <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
     <td width="10px">&nbsp;</td>
     <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
     <td width="10px">&nbsp;</td>
     <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
     <td width="10px">&nbsp;</td>
     
     </tr>
     <?php
     $total = $total + $_SESSION["amounts"][$i];
     }
     $_SESSION["total"] = $total;
     ?>
     <tr>
     <td colspan="7"><br><b><u>Total include tax : <?php echo'$'.number_format($total+($total*0.065),2); ?></u></b></td>
     </tr>
     </table>
 <?php
 }
 ?>
    
    <br>
    <br>
    <br><form name="purchasy" method="get" action="CMS_purchasesummary.php"  onsubmit="return validateForm()">
          First Names : <input type = "text" name = "fname" required=""/>
          <br><br>
          Last Names : <input type = "text" name = "lames" required=""/>
          <br><br>          
          Email Address : <input type = "text" name = "email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
          <br><br>
          Phone Number : <input type = "text" name = "pnumber" required=""/>
          <br><br>
          Address 1 : <input type = "text" name = "address1" required=""/>
          <br><br>
          Address 2 : <input type = "text" name = "address2"/>
          <br><br>
          City : <input type = "text" name = "city" required=""/>
          <br><br>
          State : <input type = "text" name = "state" required=""/>
          <br><br>
          Zip Code : <input type = "text" name = "zcode" required=""/>
          <br><br>
          Card Number : <input type = "text" name = "cnumber1" maxlength="4" size="4" required=""/>-<input type = "password" name = "cnumber2" maxlength="4" size="4" required=""/>-<input type = "password" name = "cnumber3" maxlength="4" size="4" required=""/>-<input type = "password" name = "cnumber4" maxlength="4" size="4" required=""/>
          <br><br>
          Expiration date(Month/Year) : <select name="month" id="month">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select> <select name="year" id="year">
              <option value="01">2021</option>
              <option value="02">2022</option>
              <option value="03">2023</option>
              <option value="04">2024</option>
              <option value="05">2025</option>
              <option value="06">2026</option>
            </select>
          Security Code : <input type = "password" name = "security" maxlength="3" size="3" required=""/>
          <br><br>
          <input type = "submit" value="Purchase Order"></form>
          <br><br>
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