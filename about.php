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
		<title>My Mobile  | About </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="My Mobile" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/style1.css" rel="stylesheet" />

		<script >
			var modal = document.getElementById('id01');
							var modal2 = document.getElementById('id02');

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
							    if (event.target == modal) {
							        modal.style.display = "none";
							    }
							    else if (event.target == modal2) {
							        modal.style.display = "none";
							    }
							}
					</script>
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
				<div id="id01" class="modal">
  								
							  <form class="modal-content animate" action="connectDB.php" method="POST">							    <div class="imgcontainer">
							      <span onclick="document.getElementById('id01').style.display='none'" class="closelog" title="Close Modal">&times;</span>
							      <img src="images/img_avatar2.png" style="max-height: 150px;max-width:150px;" alt="Avatar" class="avatar">
							    </div>

							    <div class="container">
							      <label><b>Username</b></label>
							      <input type="text" placeholder="Enter Username" name="uid" required>

							      <label><b>Password</b></label>
							      <input type="password" placeholder="Enter Password" name="pwd" required>
							        
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

							<div id="id02" class="modal2">
  								
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
					<li><a href="about.php"><?php
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
		<!----start-logo--
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
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="about">
		    		<h4>About Us</h4>
		    		<div class="section group">
					<div class="col_1_of_3 span_1_of_3 about-frist">
						<h3>Did You Know?</h3>
						<h5 style="font-size: 17px"><p>Discover the top handsets on the market with our fab range of mobile phones. We've got a huge selection from the world's leading brands, from ultra-thin HTCs to sleek Samsungs and intelligent iPhones. Narrow down the range based on the features that matter to you – our filters help you highlight 4G, SIM-free and easy-to-use designs, as well as sort by brand, operating system or the newest styles. Expect powerful processors, lightweight designs and bags of storage from our range of mobiles. </h5></p>
						<img src="images/logo1.png" style="margin-top: 60px;">
					</div>
					<div class="col_1_of_3 span_1_of_3 about-centre">
						<h3>Our Mission</h3>
						<a href="#"><img src="images/rsz_o_1478616787_442bfa0043392f999412f0d86cc63ae6.jpg"></a>
						<h5>We believe Quality & Affordability pay the final dividend…. </h5>
						<p>
						Our customers are the reason we’re in business, so we should treat them that way. We offer quality service at affordable prices, and we do it with the best customer service possible. We look for every opportunity where we can exceed our customers’ expectations. That’s when we’re at our very best..</p>
					</div>
					<div class="col_1_of_3 span_1_of_3 quites">
						<h3>Updates</h3>
						<blockquote><p><img src="images/quotes_alt.png"> &nbsp;Today at Apple’s annual iPhone event held in San Francisco’s Bill Graham Civic Auditorium, the company announced their next generation of i Phones Apple iPhone 7 and 7 Plus announcement coverage wrap-up the iPhone 7 and the iPhone 7 Plus.</p></blockquote>
						<a href="#">- Apple inc. <span>Usa</span></a><br /><br />
						<blockquote><p><img src="images/quotes_alt.png"> &nbsp;Samsung has announced the new Galaxy Tab Active, a ruggedized version of their Galaxy Tab 4 8.0. The tablet features an anti-shock covering that protects it from drops as high as 1.2m. It is also dust and water resistant with IP67 certificate.</p></blockquote>
						<a href="#">- Samsung <span>South Korea</span></a>
					</div>
					<div class="clear"> </div>
					<div class="section group">
						<div class="cont span_2_of_3">
						       <h3>My Mobile Store General Information</h3>
							   	<p>Company Summary


								My Mobile has been incorporated to develop and run a new mobile phone shop in a busy high street. Currently,there is no independent store offering this service. Being first to market will provide a high return for our 
								venture..</p>
							   <p>My Mobile is established in the year 2016 and started its retail business at Galle Road. We are the one of the first mobile shop to list our retail pricelist in our website without any gimmicks or hidden cost so that all potential buyers are aware of the actual price to pay upon purchase. We have grown from our humble beginning to a full fledge mobile device outlet catering to the needs of the discerning user. Our business ethos have always been honestly and reliability, this is one reason why we have manage to expand it a very competitive industry.</p>

							<p>Technical specifications of new mobile devices can be overwhelming, and can be difficult to understand. For this reason we try to explain each detail with utter most transparency making sure we do not mislead you. We pride ourselves with a team of customer focus sales team, whose passion is to help every customer find the right mobile phone with the best pricing options. </p>				    
						</div>
						<div class="rsidebar span_1_of_3 about-frist">
						      <h3>Fresh-links</h3>
						      <ul>
								<li><a href="Apple.php">Apple iphone</a></li>
							<li><a href="Nokia.php">Nokia</a></li>
							<li><a href="Samsung.php">Samsung Mobiles</a></li>
							<li><a href="HTC.php">HTC</a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
						      
						</div>
		    </div>
				</div>
				
		    	</div>
		    	</div>
		    	
		    </div>
		    <div class="clear"> </div>
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

