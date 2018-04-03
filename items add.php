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
				<?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					
					if ($_SESSION['user_type']=='admin' ) {
						echo '<li><a href="cartDB.php">Users</a></li>';
					}}
				 ?>
					
					
					<?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					
					if ($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='') {
						echo '<li><a href="checkout.php">View Cart</a></li>';
					}}
				 ?>
				 <?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					
					if ($_SESSION['user_type']=='admin' ) {
						echo '<li><a href="feedback.php">Feedbacks</a></li>';
					}}
				 ?>
					
					
				
					<li><a href="javascript:void(0)"><span>Hello 
					<?php 
				if(isset($_SESSION['logged']))
					if($_SESSION['logged'])
							echo $_SESSION['user_name'];
					// 	else
					// 		echo "";
					// else
					// 	echo "";
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
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="section group">				
				<div class="col span_1_of_3" style="float: left; background-color: #99ffbb;">
					<div class="contact-form" style="padding: 30px;">

			    	 	<h2>Add New Admin</h2>
			    	 	<form action="adminadd.php" method="POST" >
			    	 		<span><label>First Name</label></span>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,30}$" placeholder="Enter First Name" name="r_fname" autocomplete="off" required>
							      <span><label>Last Name</label></span>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,30}$" placeholder="Enter Last Name" name="r_lname" autocomplete="off" required>
							      <span><label>Email Address</label></span>
							      <input type="text" placeholder="Email Address(www.example@gmail.com)" autocomplete="off" name="r_email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
							      <span><label>Username</label></span>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,30}$" placeholder="Enter Username" autocomplete="off" name="r_uid" required>

							      <span><label>Password &nbsp <b style="font-size: 12px;color: red;">(Example : ThariNdu123 )</b></label></span>
							      <input type="text"  pattern="(?=^.{8,}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$" autocomplete="off" placeholder="Enter Password" name="r_pwd" required>
							        <span><label>User Type</label></span>
						    	<span><input list="users" autocomplete="off" name="u_type" placeholder="Seclect" required>
									  <datalist id="users" autocomplete="off">
									    <option value="admin">
									    <option value="">
									    
									  </datalist>
									  </span>
							      <br>
							      <input type="submit" value="Register Admin">
							      </form>
      				</div>
      				<br>
      			<div class="contact-form" style="padding: 30px;padding-top: 0px;">
				     	    <h2>Manage Stocks</h2><br>
					    <form action="updatestock.php" method="POST" enctype="multipart/form-data">

					    	<input type="submit" name="search" value="Update Stock">
					    </form>
					    
					    <br>
					    <form action="showstock.php" method="POST" enctype="multipart/form-data">
					    	<input type="submit" name="stock" value="Show Stock">
					    </form>
							      	
				   </div>
				</div>				
				<div class="col span_2_of_3" style="float: right; background-color: #b3d9ff;">
				  <div class="contact-form " id="frmadmin" style="padding: 30px;">
				  	<h2>Store Controll</h2>

					    <form action="store control.php" method="POST" enctype="multipart/form-data">
					    	<div>
						    	<span><label>Item Brand</label></span>
						    	<span><input list="brands"  name="brands" placeholder="Seclect Brand" autocomplete="off" required>
									  <datalist id="brands">
									    <option value="Apple">
									    <option value="HTC">
									    <option value="Samsung">
									    <option value="Nokia">
									    <option value="Asus">
									    <option value="Blackberry">
									    <option value="Huawei">
									    <option value="Sony">
									    <option value="Google">
									    <option value="Oppo">
									    <option value="Xiaomi">
									    <option value="Motorola">
									    <option value="Micromax Mobiles ">
									    
									  </datalist>
									  </span>
						    </div>
						    <div>
						    	<span><label>Item Name</label></span>
						    	<span><input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,60}$" name="itemname" autocomplete="off" placeholder="Item Name" required "></span>
						    </div>
						    <div>
						     	<span><label>Image.NO1</label></span>
						    	<span><input type="file" name="pic1" accept="image/*" required=""></span>
						    	<span><label>Image.NO2</label></span>
						    	<span><input type="file" name="pic2" accept="image/*" required=""></span>
						    </div>
						    <div>
						    	<span><label>Discription</label></span>
						    	<span><textarea name="Discription" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,200}$" autocomplete="off" required placeholder="Add Discription about Product...."> </textarea></span>
						    </div>
						    <span><label>Specifications link</label></span>
						    	<span><input type="text" value="" autocomplete="off" name="Specifications" placeholder="Put link here" pattern="https?://.+" required "></span>
						   <div>
						   <span>
						   <label>Item Price</label></span>
						    	<span><input type="text" pattern="[0-9]{1,10}[\.]?[0-9]{2}" required name="price" value="" autocomplete="off" placeholder=" $ 00.00" "></span>
						   		
						  </div>
						  <div> <span><label>Item Quantity</label></span>
						    	<span><input type="text" value="" autocomplete="off" placeholder="Item Quantity" name="Quantity" required pattern="[0-9]{1,10}"></span></div>
						 <input type="submit" name="btn_upload" value="ADD">&nbsp&nbsp&nbsp&nbsp
						
						    	

					    </form>
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
					<p>No 641/02,Unity Plaza,Colombo 04 <br>	Sri Lanka</p>
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

