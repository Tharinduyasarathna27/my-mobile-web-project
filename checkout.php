<!-- <?php 
  //session_start();
  //echo $_SESSION["user_id"];

?> -->
<?php 
include "logging.php";
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>My Mobile  | admin only </title>
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <meta name="keywords" content="My Mobile" />
    <link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="cartstyle.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="css/style1.css" rel="stylesheet" />
    <script src="bootstrap/bootstrap/jquery.js"></script>
    <script src="bootstrap/bootstrap/bootstrap.js"></script>
    <script src="bootstrap/bootstrap/bootstrap-confirmation.js"></script>
    <script >
           
            $(window).on("load resize ", function() {
          var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
          $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();

        </script>

        
  </head>
  <body style="background-color: auto;">
    <div class="wrap">
    <!----start-Header---->
    <div class="header">
      <div class="search-bar">
        <form>
          <input type="text"><input type="submit" value="Search" />
        </form>
      </div>
      <div class="clear"> </div>
      <div class="header-top-nav">
        <ul >
        <?php 
                  
                  
        if(isset($_SESSION['user_type'])){
          
          if ($_SESSION['user_type']=='admin' ) {
            echo '<li style="font-size: 1.2em;"><a href="cartDB.php" style="text-decoration:none;">Users</a></li>';
          }}
         ?>
          
          
          
         <?php 
                  
                  
        if(isset($_SESSION['user_type'])){
          
          if ($_SESSION['user_type']=='admin' ) {
            echo '<li style="font-size: 1.2em;"><a href="feedback.php" style="text-decoration:none;">Feedbacks</a></li>';
          }}
         ?>
         
          
          <!-- <li style="font-size: 1.2em;"><a href="#" style="text-decoration:none;">Develivered </a></li> -->
          
          <li style="font-size: 1.2em;"><a href="javascript:void(0)" style="text-decoration:none;"><span>Hello 
          <?php 
        if(isset($_SESSION['logged']))
          if($_SESSION['logged'])
              echo $_SESSION['user_name'];
          //  else
          //    echo "";
          // else
          //  echo "";
          ?>! &nbsp;: </span></a><lable></lable></li>
          
          <li style="font-size: 1.2em;"><a href="#" style="text-decoration:none;">Logged as Admin
                    </a></li>
          <li style="font-size: 1.2em;"><a href="#" style="text-decoration:none;"><?php
            if(isset($_SESSION['logged']))
          if($_SESSION['logged']){
              echo "<a href='logout.php'>Logout</a>";
              //session_destroy();
              
            }
            else
              echo "";
          else
            echo ""; ?></a></li>
        </ul>
      </div>
      <div class="clear"> </div>
    </div>
    </div>
    <div class="clear"> </div>
    <div class="top-header">
      <div class="wrap">
    <!----start-logo---->
      <div class="logo">
        <a href="index.html"><img src="images/logo1.png" title="logo" /></a>
      </div>
    <!----end-logo---->
    <!----start-top-nav---->
    <div class="top-nav">
      <ul >
        <li style="font-size: 1.2em;"><a href="index.php" style="text-decoration:none;">Home</a></li>
        <li style="font-size: 1.2em;"><a href="about.php" style="text-decoration:none;">About</a></li>
        <li style="font-size: 1.2em;"><a href="store.php" style="text-decoration:none;">Store</a></li>
      
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li style="font-size: 1.2em;"><a href="contact.php" style="text-decoration:none;">Contact</a></li>
       
        <?php 
                  
                  
        if(isset($_SESSION['user_type'])){
          
          if ($_SESSION['user_type']=='admin' ) {
            echo ' <li style="font-size: 1.2em;"><a href="items add.php" style="text-decoration:none;">Store Control</a></li>';
          }}
         ?>
      </ul>
    </div>
    <div class="clear"> </div>
    </div>
    </div>
   

   <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="tharindu-seller@gmail.com">
  <input type="hidden" name="currency_code" value="US">
  

        <!-- <div class="col span_2_of_3" style="float: left; margin-left:50px;margin-right: 0px; max-width: 50%; background-color:auto; "> -->
          <div class="contact-form" style="max-width: 95%; padding: 30px;padding-bottom: 0px;">
          <section>
          <style >
            
            thead{
                  padding: 20px 15px;
                  text-align: left;
                  font-weight: 500;
                  font-size: 16px;
                  color: #fff;
                  text-transform: uppercase;
                }
                th{
                  padding: 20px 15px;
                  text-align: left;
                  font-weight: 500;
                  font-size: 16px;
                  color: #fff;
                  text-transform: uppercase;
                }


                td{
                  padding: 5px;
                  padding-left: 20px;
                  text-align: left;
                  vertical-align:middle;
                  font-weight: 300;
                  font-size: 15px;
                  color: black;
                  border-bottom: solid 1px rgba(255,255,255,0.4);
                }
                #tdx{

                 padding: 10px 5px;
                  text-align: left;
                  font-weight: 500;
                  font-size: 15px;
                  color: #fff;
                  text-transform: uppercase;
                  border-bottom: solid 0px rgba(255,255,255,0.4);
                }

          </style>
            <h1 id="h1x">Shopping Cart </h1>
            <!-- class="table table-bordered" -->
            <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <td id="tdx" >Name</td>
                  <td id="tdx">Price</td>
                  <td id="tdx">Quantity</td>
                  <td id="tdx">Subtotal</td>
                   <td id="tdx">Drop Item</td>

                </tr>
              </thead>
              </table>
              </div>
              <div class="tbl-content">
              <table cellpadding="0" cellspacing="0" border="0">
              <tbody >
                  <?php
                    $total=0;
                    $totalqty=0;
                    if(isset($_SESSION['shopping_cart'])){
                    foreach($_SESSION['shopping_cart'] as $key => $item){
                      $count=$key+1;
                      $subtotal=$item['item_price'] * $item['item_quantity'];
                      $total+=$subtotal;
                      $subqty=$item['item_quantity'];
                      $totalqty+=$subqty;
                      $add=1;
                      echo "<tr>";
                      echo "<td style='padding-left: 5px;'>".$item['item_name'] . "</td>";
                      echo "<td style='padding-left: 5px;'>".$item['item_price'] . "</td>";
                      echo "<td>".$item['item_quantity'] . "</td>";
                      echo "<td>$".$subtotal . "</td>";
                      
                      echo "<td><a class='btn btn-default'  href='addtocart_new.php?delete=" . $item['cart_id']. "'><img src='images/remove.png' /></a></td>";
                      echo "<input type='hidden' name='item_name_$count' value='".$item['item_name']."'>";
                      echo "<input type='hidden' name='quantity_$count' value='".$item['item_quantity']."'>";
                     echo  "<input type='hidden' name='item_number_$count' value='".$item['item_id']."'>";
                     echo  "<input type='hidden' name='amount_$count' value='".$item['item_price']."'>";
                      echo "<tr>";
                       
                    //    $_SESSION['total']=$total;
                    // $_SESSION['total_items']=$totalqty; 
                    }
                    // echo "<tr>";
                    //   echo "<td>".$totalqty    ."</td>";
                    // echo "<tr>";
                  }
                   ?>  
      


                    <!-- <td>$item['item_name']</td>
                          <td>$item['item_price']</td>
                          <td>$item['item_quantity']</td>
                          <td>$subtotal</td> -->


              </tbody>
            </table> 
             <a href="store.php"><button style="margin-top: 24px;margin-bottom: 0px;background-color:#ffff99;" type="button" class="btn  "  name="backtoshopping" value="Continue Shopping"> Continue <br>Shopping</button></a>
            <?php
      function show_paypal(){

          //if(isset($_SESSION['total_items'])){
              // adddata()
              //if($_SESSION['total_items']>0){
                  $paypal_button =<<<DELIMITER
                  <input type="image" name="upload"
                  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                  alt="PayPal - The safer, easier way to pay online">

DELIMITER;
                      return $paypal_button;
                //  }
                  
              //}

          }



                  ?><br><br>

                  
            
                </div>
              </div>
              </section>
            </div>
          <!-- </div>         -->
        </div>
           <div class="clear"> </div>
           
      <div class="contact-form" style="max-width: 95%; padding: 30px 30 px 0px 30px;">
      <h1 id="h1x" style="margin-left: 150px;margin-bottom: 0px;margin-top: 0px; ">Proceed</h1>
      <hr style="max-width: 500px;margin-top: 0px;margin-left: 645px;">
                  <table style="width:30%;border: 2px solid rgba(255,255,255,0.4);" align="right">
              <tr>
                <th style="background-color: rgba(255,255,255,0.2);color: black;font-weight: bold;">Total Items</th>
                <?php 
                      echo "<td style='color: black;font-weight: bold;font-size: 18px;'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$totalqty    ."</td>";
                     ?>
              </tr>
              <tr>
                <th style="background-color: rgba(255,255,255,0.4);color: black;font-weight: bold;">Grand Total</th>
                <?php 
                      echo "<td style='color: black;font-weight: bold;font-size: 20px;'> ".$total    .".00</td>";
                     ?>
              
             
            </table>
<br><br><br>
<span style="float: right; margin-right: 110px;"><?php echo show_paypal(); ?></span><br>
      
</form>
               </div>
        
    </div>
    
  </div>
  <div class="clear"> </div><br>
  
        </div>

        </div>
    <div class="footer">
      <div class="wrap">
      <div class="section group">
        <div class="col_1_of_4 span_1_of_4">
          <h3>Our Info</h3>
          <p>"We believe Quality & Affordability pay the final dividend….
            …It is always the result of Commitment, Sincere Effort,
            Intelligent Direction and Skillful Execution".</p>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>Latest-News</h3>
          <p>Samsung Galaxy Note 8 Launch Set for August 23.</p>
          <p>Nokia 6, Nokia 5 Will Release in India in Mid-August, Says HMD Global.</p>
          <p>iPhone 8 Reportedly Facing New Issues With Wireless Charging, 3D Front Sensor.</p>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>Store Location</h3>
          <p>No 641/02,Unity Plaza,Colombo 04 <br>  Sri Lanka</p>
          <h3>Order-online</h3>
          <p>(+94)715887573</p>
          <p>(+94)767418074</p>
        </div>
        <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
          <h3>News-Letter</h3>
          <input type="text"><input type="submit" value="go" />
          <h3>Fallow Us:</h3>
           <ul>
            <li><a href="#"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
            <li><a href="#"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
            <li><a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
           </ul>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

