<html>
<head>
            <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child {
          background-color: #dddddd;
        }

        </style>
        </head>
<title>CMS</title>
<link rel="stylesheet" href="style.css">
<meta charset ="utf-8">

</head>
<body>
    <?php include "header.php"; ?>
    <h1>BIBIGO_E Store</h1>
      <div id="grid">
    <ol><strong>Menu for Bibigo<br></strong>
      <?php session_start();
        include 'menu.php'
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
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions

//Define the products and cost
$products = array("Dumpling", "Soup", "Kimchi", "Rice", "K_Style Hamburger Steak", "Port cutlet", "Noodle", "Ramen", "K_Style Meatball", "K_Style Chicken");
$amounts = array("9.99", "5.99", "3.99", "2.99", "1.99", "8.99", "9.99", "5.99", "4.99", "14.99");
$pictures = array("dumpling","soup","kimchi","rice","hambugersteak","porkcutlet","noodle","ramen","meatball","chicken");
//Load up session
 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
  }
 }
 //---------------------------
 //Reset
 if ( isset($_GET['reset']) )
 {
 if ($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]); //The quantity for each product
   unset($_SESSION["amounts"]); //The amount from each product
   unset($_SESSION["total"]); //The total cost
   unset($_SESSION["cart"]); //Which item has been chosen
   }
 }

 //---------------------------
 //Add
 if ( isset($_GET["add"]) )
   {
       $selected_val = $_POST['qtys'];
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }

  //---------------------------
  //Delete
  if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;
   //remove item if quantity is zero
   if ($qty == 0) {
    $_SESSION["amounts"][$i] = 0;
    unset($_SESSION["cart"][$i]);
  }
 else
  {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }
 }
 ?>
 <h2>List of All Products</h2>
 <table>
   <tr>
   <th>Product Picture</th>
   <th width="10px">&nbsp;</th>
   <th>Product</th>
   <th width="10px">&nbsp;</th>
   <th>Amount</th>
   <th width="10px">&nbsp;</th>
   <th>Action</th>
   </tr>
   
   <?php
 for ($i=0; $i< count($products); $i++) {
   ?>
   
<div class="alignLeft">
   <tr>
   <td><img src="<?php echo($pictures[$i]);?>.jpg" alt="" style="width:200px; height:auto;"></td>
   <td width="10px">&nbsp;</td>
   <td><?php echo($products[$i]); ?></td>
   <td width="10px">&nbsp;</td>
   <td><?php echo($amounts[$i]); ?></td>
   <td width="10px">&nbsp;</td>
   <td> <div id="selects">
<!--  <select id="qtys">-->
<!--      <option value="1">1</option>-->
<!--      <option value="2">2</option>-->
<!--      <option value="3">3</option>-->
<!--      <option value="4">4</option>-->
<!--      <option value="5">5</option>-->
<!--</select>-->
<a href="?add=<?php echo($i); ?>">Add to cart</a></div></td>
   </tr>
   </div>
    <?php
 }
 ?>

     <tr>
     <td colspan="5"></td>
     </tr>
     <tr>
     </tr>
     <tr>
     <br><th colspan="5"><button><a href="?reset=true">Reset Cart</a></button></th>
     </tr>
     </table>
     <?php
     if ( isset($_SESSION["cart"]) ) {
     ?>
     <br/><br/><br/>
     <h2>Cart</h2>
     <form action="CMS_purchase.php">
     <table>
     <tr>
     <th>Product</th>
     <th width="10px">&nbsp;</th>
     <th>Qty</th>
     <th width="10px">&nbsp;</th>
     <th>Amount</th>
     <th width="10px">&nbsp;</th>
     <th>Action</th>
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
     <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
     </tr>
     <?php
     $total = $total + $_SESSION["amounts"][$i];
     }
     $_SESSION["total"] = $total;
     ?>
     <tr>
     <td colspan="7">Total : <?php echo($total); ?></td>
     </tr>
     </table>
     <input type="submit" value = "checkout" name = "checkout">
     </form>
 <?php
 }
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