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
		<title>My Mobile| Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="My Mobile" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/style1.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>

		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  <script>
				var modal = document.getElementById('id01');
							var modal2 = document.getElementById('id02');

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
							    if (event.target == modal) {
							        modal.style.display = "none";
							    }
							    else if (event.target == modal2) {
							        modal2.style.display = "none";
							    }
							}
					</script>
	</head>
	<body>
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
				<div id="id01" class="modal" style="z-index: 1000;">
  								
							  <form class="modal-content animate" action="connectDB.php" method="POST">							    
							  <div class="imgcontainer">
							      <span onclick="document.getElementById('id01').style.display='none'" class="closelog" title="Close Modal">&times;</span>
							      <img src="images/img_avatar2.png" style="max-height: 150px;max-width:150px;" alt="Avatar" class="avatar">
							    </div>

							    <div class="container">

							      <label><b>Username</b></label>
							      <input type="text" placeholder="Enter Username" name="uid" required="">

							      <label><b>Password</b></label>
							      <input type="password" placeholder="Enter Password" name="pwd" required="">
							        
							      <!-- <button type="submit" class="buttonlog">Login</button> -->
							      <button class="buttonlog" id="logbtn">Login</button>
							      <input type="checkbox" checked="checked"> Remember me
							    </div>

							    <div class="container" style="background-color:#f1f1f1">
							      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" id="log_cancle_btn">Cancel</button>
							      <span class="psw">Forgot <a href="#">password?</a></span>
							    </div>
							  </form>
							</div>

							<div id="id02" class="modal2" style="z-index: 1000;">
  								
							  <form class="modal2-content animate" name="cbox"  method="POST" action="register.php"">
							    <div class="imgcontainer">
							      <span onclick="document.getElementById('id02').style.display='none'" class="closelog" title="Close Modal">&times;</span>
							      <img src="images/img_avatar2.png" style="max-height: 150px;max-width:150px;" alt="Avatar" class="avatar">
							    </div>

							    <div class="container">
									<label><b>First Name </b></label>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{30}$"  placeholder="Enter First Name" name="r_fname" required>
							      <label><b>Last Name</b></label>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{30}$" placeholder="Enter Last Name" name="r_lname" required>
							      <label><b>Email Address</b></label>
							      <input type="text" placeholder="Email Address(www.example@gmail.com)" name="r_email" required  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
							      <label><b>Username</b></label>
							      <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" placeholder="Enter Username (at least 3 digits!)" name="r_uid" required>

							      <label><b>Password  </b> &nbsp <b style="font-size: 12px;color: red;">(Example : ThariNdu123 )</b></label>
							      <input type="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Enter Password" name="r_pwd" required>
							        
							      <script type="text/javascript">

										  function checkForm(form)
										  {
										    ...
										    if(!form.terms.checked) {
										      alert("Please indicate that you accept the Terms and Conditions");
										      form.terms.focus();
										      return false;
										    }
										    return true;
										  }

										</script>

										<form onsubmit="return checkForm(this);">
										
										<p><input type="checkbox" required="" name="terms"> I accept the <u>Terms and Conditions</u></p>
										
										</form>

							      <button class="buttonlog" id="regbtn">Register</button>
							      
							    </div>

							    <div class="container" style="background-color:#f1f1f1">
							      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" id="log_cancle_btn">Cancel</button>
							      
							    </div>
							  </form>
							</div>
					<li><a href="#"><lable onclick="document.getElementById('id02').style.display='block'" style="width:auto; height: auto; "><?php 
					if(isset($_SESSION['logged']))
					if($_SESSION['logged'])
							echo "";
						else
							echo "Register";
					else
						echo "Register"; ?></lable></a></li>
					<li><a href="#" ><lable onclick="document.getElementById('id01').style.display='block'" style="width:auto; height: auto; "><?php 
					if(isset($_SESSION['logged']))
					if($_SESSION['logged'])
							echo "";
						else
							echo "Login";
							
					else
						echo "Login"; ?></lable></a></li>
					<?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					
					if ($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='') {
						echo '<li><a href="checkout.php">View Cart</a></li>';
					}}
				 ?>

					<li><a href="javascript:void(0)"><span>Hello ! &nbsp;: </span></a><lable></lable></li>
					
					<li><a href="#"><?php 
				if(isset($_SESSION['logged']))
					if($_SESSION['logged'])
							echo $_SESSION['user_name'];
						else
							echo "not logged in";
					else
						echo "not logged in";
					?></a></li>
					<li><a href="#"><?php
						if(isset($_SESSION['logged']))
					if($_SESSION['logged']){
							echo "<a href='logout.php'>Logout</a>";
							//session_destroy();
						}
						else
							echo "";
					else
						echo ""; ?>
						
						
						</a></li>
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
				<?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					//echo $_SESSION['user_type'];
					if ($_SESSION['user_type']=='admin') {
						echo '<li><a href="items add.php">Store Control</a></li>';
					}}
				 ?>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/1h.png" alt=""></li>
					      <li><img src="images/2h.png" alt=""></li>
					      <li><img src="images/3h.png" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="Nokia.php"><img src="images/rsz_1maxresdefault.png"></a>
					  <h3>NOKIA 6 </h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <a href="Apple.php"><img src="images/rsz_o_1478616787_442bfa0043392f999412f0d86cc63ae6.jpg"></a>
					  <h3>iphone 7 plus </h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="HTC.php"><img src="images/rsz_2htc-one-m10-b.jpg"></a>
					  <h3>HTC One M10 </h3>
				</div>
			</div>
		    	</div>
		    	
		    <div class="content-grids">
		    	<h4>Deals of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/apple-apple-iphone-7-128gb.png">
					 <a href="Apple.php">Apple iPhone 7 128Gb-Price in Sri Lanka is</a> <br>
					 <h3>LKR 109,300.00</h3>
					 <ul>
					 	<li><a  class="cart" href="Apple.php"> </a></li>
					 	<li><a  class="i" href="Apple.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/apple-apple-iphone-7-32gb.png">
					  <a href="Apple.php">Apple iPhone 7 Amazing Best Price in Sri Lanka is</a>
					 <h3>LKR 124,900.00</h3>
					 <ul>
					 	<li><a  class="cart" href="Apple.php"> </a></li>
					 	<li><a  class="i" href="Apple.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/nokia-nokia-6-4gb-ram-64gb.png">
					  <a href="Nokia.php">Nokia 6 2017-Amazing Best Price in Sri Lanka is </a>
					 <h3>LKR 49900.00</h3>
					 <ul>
					 	<li><a  class="cart" href="Nokia.php"> </a></li>
					 	<li><a  class="i" href="Nokia.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/nokia-nokia-3.jpg">
					  <a href="Nokia.php">Nokia 3 2017-Amazing Best Price in Sri Lanka is</a>
					 <h3>LKR 21,400.00 </h3>
					 <ul>
					 	<li><a  class="cart" href="Nokia.php"> </a></li>
					 	<li><a  class="i" href="Nokia.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/rsz_large.png">
					 <a href="HTC.php">he HTC U11 was announced with a    price tag of which is roughly about.      The Best Price in Sri Lanka is </a>
					 <h3>LKR 118,900.00</h3>
					 <ul>
					 	<li><a  class="cart" href="HTC.php"> </a></li>
					 	<li><a  class="i" href="HTC.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/htc-htc-u-play.png">
					  <a href="HTC.php">The best price of HTC U Play in Sri Lanka is </a>
					 <h3>LKR 65,900 </h3>
					 <ul>
					 	<li><a  class="cart" href="HTC.php"> </a></li>
					 	<li><a  class="i" href="HTC.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/samsung-samsung-galaxy-s8-plus.jpg">
					  <a href="Samsung.php">Samsung Galaxy S8+ smartphone was launched in March 2017.</a>
					 <h3>LKR 117900.00</h3>
					 <ul>
					 	<li><a  class="cart" href="Samsung.php"> </a></li>
					 	<li><a  class="i" href="Samsung.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/samsung-samsung-galaxy-s8.png">
					  <a href="Samsung.php">Samsung Galaxy S8 Lowest Price in Sri Lanka </a>
					 <h3>LKR 102000.00	</h3>
					 <ul>
					 	<li><a  class="cart" href="Samsung.php"> </a></li>
					 	<li><a  class="i" href="Samsung.php"> </a></li>
					 	<li><a  class="Compar" href="#"> </a></li>
					 	<li><a  class="Wishlist" href="#"> </a></li>
					 </ul>
				</div>
			</div>
		    
		    	</div>
		    	<div class="content-sidebar" >
		    		<h4 >Categories</h4>
						<ul >
							<li><a href="Apple.php">Apple iphone</a></li>
							<li><a href="Nokia.php">Nokia</a></li>
							<li><a href="Samsung.php">Samsung Mobiles</a></li>
							<li><a href="HTC.php">HTC</a></li>
							<li><a href="#">Asus</a></li>
							<li><a href="#">Blackberry</a></li>
							<li><a href="#">Huawei</a></li>
							<li><a href="#">Sony</a></li>
							<li><a href="#">Oppo</a></li>
							<li><a href="#">Google</a></li>
							<li><a href="#">Xiaomi </a></li>
							<li><a href="#">LG Mobiles</a></li>
							<li><a href="#">Motorola</a></li>
							<li><a href="#">Micromax Mobiles </a></li>
							
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
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
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>Mobilestore  &#169	 All Rights Reserved | Design By Thake</p>
		</div>
		</div>
		</div>
	</body>
</html>

