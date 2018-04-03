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
   
    <link href="css/style1.css" rel="stylesheet" />
  </head>
  <body style="background-color: #cccccc;">
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
        <ul>
        
          <li><a href="cartDB.php">Orders</a></li>
          
          <?php 
                  
                  
        if(isset($_SESSION['user_type'])){
          
          if ($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='') {
            echo '<li><a href="checkout.php">View Cart</a></li>';
          }}
         ?>
          <li><a href="feedback.php">Feedbacks</a></li>
          <li><a href="javascript:void(0)"><span>Hello 
          <?php 
        if(isset($_SESSION['logged']))
          if($_SESSION['logged'])
              echo $_SESSION['user_name'];
          //  else
          //    echo "";
          // else
          //  echo "";
          ?>! &nbsp;: </span></a><lable></lable></li>
          
          <li><a href="#">Logged as Admin
                    </a></li>
          <li><a href="#"><?php
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
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="store.php">Store</a></li>
      
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li><a href="contact.php">Contact</a></li>
        <li><a href="items add.php">Store Control</a></li>
      </ul>
    </div>
    <div class="clear"> </div>
    </div>
    </div>
    <div class="col span_1_of_3" style="float:right;margin-right:50px;margin-left: 0px; max-width: 50%;background-color: #b3d9ff;">
      <div class="contact-form" style="max-width: 95%; padding: 30px;">
      <h2>Drop Users</h2>
      <form action="move_remove_order.php" method="POST" enctype="multipart/form-data">
                <div>
                  <span><label>Customer Order ID</label></span>
                  <span><input type="text" autocomplete="off" name="drop_uid" value="" placeholder="Order ID" style="max-width: 80%;" "></span>
                  <input type="submit" name="btndrop" value="Drop">
                </div>
                </form>

                </div>
                
    </div>
        <div class="col span_2_of_3" style="float: left; margin-left:50px;margin-right: 0px; max-width: 50%; background-color: #99ffbb; ">
          <div class="contact-form" style="max-width: 95%;padding: 30px;">
            
              <h2>Customer details</h2>
      <form action="move_remove_order.php" method="POST" enctype="multipart/form-data">
                <div>
                  
                  <?php 

 
                $result = mysqli_query($connection,"SELECT `id`, `first`,`uid`, `last`, `uemail`,`user_type` FROM `user` ORDER BY `user_type` DESC ");
                    ?> <style >
                 table {
                      border-collapse: collapse;
                      width: 100%;
                  }

                  th, td {
                      /*//text-align: center;*/
                      padding: 8px;
                      text-align: left;
                  }

                  tr:nth-child(even){background-color: #f2f2f2}

                  th {
                      background-color: #4CAF50;
                      color: white;
                      display: inline-block;
                     
                      
                  }
                   tbody { display:inline-block; }

                  tbody {
                      height: 300px;       
                      overflow-y: auto;    /* Trigger vertical scroll    */
                      overflow-x: hidden;  /* Hide the horizontal scroll */
                  }
                  </style>
                    <table  >
                    <thead>
                      <tr>
                        <th>Id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                      
                         <th>user Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        
                        <th ">E-Mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                         <th>user Type</th>
                       
                        <!-- <th>Subject</th> -->
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while( $row = mysqli_fetch_assoc( $result ) ){
                          echo
                          "<tr>
                            <td>".$row['id']."</td>
                            
                            <td>".$row['first']." ".$row['last']."</td>
                            <td>".$row['uid']."</td>
                            
                            <td>".$row['uemail']."</td>
                            <td>".$row['user_type']."</td>
                            
                           
                          </tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                </form>
                
                </div>
            </div>
          </div>        
        </div>
           <div class="clear"> </div>
  </div>
  <div class="clear"> </div>
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

