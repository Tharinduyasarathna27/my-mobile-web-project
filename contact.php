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
		<title>My Mobile  | Contact </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="My Mobile" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/style1.css" rel="stylesheet" />
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
							      <input type="text" placeholder="Email Address(www.example@gmail.com)" name="r_email" required required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
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
					if($_SESSION['logged']){
							
							echo "" ;
						}
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
		    	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Unity+Plaza+Shopping+Complex,Sri+Lanka&amp;aq=4&amp;oq=light&amp;sll=6.8936167,79.8552525&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Unity+Plaza+Shopping+Complex,Sri+Lanka&amp;t=m&amp;z=14&amp;ll=6.8936167,79.8515716&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Unity+Plaza+Shopping+Complex,Sri+Lanka&amp;aq=4&amp;oq=light&amp;sll=6.8936167,79.8552525&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Unity+Plaza+Shopping+Complex,Sri+Lanka&amp;t=m&amp;z=14&amp;ll=6.8936167,79.8515716" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>No 641/02,	</p>
						   		<p>Unity Plaza,Colombo 04,</p>
						   		<p>Sri Lanka</p>
				   		<p>Phone:(+94) 715 887 573</p>
				   		<p>Fax: (+94) 117 418 07 4</p>
				 	 	<p>Email: <span>info@mymobile.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3" style="background-color: #ccffdd;">
				  <div class="contact-form" style="padding: 30px;" >
				  	<h2>Contact Us</h2>
					    <form action="contactDB.php" method="POST" style="padding: 30px;"  >
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" value="" name="cname"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" value="" name="cemail"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" value="" name="cmobile"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="csubject"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
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

