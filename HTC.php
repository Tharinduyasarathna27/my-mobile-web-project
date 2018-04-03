<?php 
	// session_start();
	//echo $_SESSION["user_id"];
 
?>
<?php 
include "logging.php";
 ?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>My Mobile| About</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="My Mobile " />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/style1.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.livequery.js"></script>
		
		<script type="text/javascript">

$(document).ready(function() {
var mobile_id;

	$(".productdiv").click(function(){
	mobile_id=$(this).attr("id");
	});
	
	var Arrays=new Array();
	
	$('.add-to-cart-button').click(function(){

		$.get('addtocart.php?mid='+mobile_id,function(){
				//location.reload();
				//alert("hh");
				//swal("Good job!", "You clicked the button!", "success");
			});
		
		var thisID 	  = $(this).parent().parent().attr('id').replace('detail-','');
		
		var itemname   = $(this).parent().find('.item_name').html();
		var itemprice  = $(this).parent().find('.price').html();
		
		
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);



			
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			var Height = $('#cart_wrapper').height();
			$('#cart_wrapper').css({height:Height+parseInt(45)});
			
			$('#cart_wrapper .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="images/remove.png" class="remove" /><br class="all" /></div>');
			
		}
		
	});	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		var sum = true;
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#cart_wrapper').html('Total Charges: $'+totalCharge);
		
		return false;
		
	});	
	
	
	var single_li_offset 	= 200;
	var current_opened_box  = -1;
	
	$('#wrap li').click(function() {
	
		var thisID = $(this).attr('id');
		var $this  = $(this);
		
		var id = $('#wrap li').index($this);
		
		if(current_opened_box == id) 
		{
			$('#wrap .detail-view').slideUp('slow');
			return false;
		}
		$('#cart_wrapper').slideUp('slow');
		$('#wrap .detail-view').slideUp('slow');
		
		
		current_opened_box = id;
		
		var targetOffset = 0;
		
		
		
		if(id<=3)
			targetOffset = 0;
		else if(id<=7)
			targetOffset = single_li_offset;
		else if(id<=11)
			targetOffset = single_li_offset*2;
		else if(id<=15)
			targetOffset = single_li_offset*3;
		
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: targetOffset}, 800,function(){
			
			$('#wrap #detail-'+thisID).slideDown(500);
			return false;
		});
		
	});
	
	$('.close a').click(function() {
		
		$('#wrap .detail-view').slideUp('slow');
		
	});
	
	$('.closeCart').click(function() {
		
		$('#cart_wrapper').slideUp();
		
	});
	
	$('#show_cart').click(function() {
		
		$('#cart_wrapper').slideToggle('slow');
		
	});
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}


function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>
<script>
						function move() {
						    var elem = document.getElementById("myBar"); 
						    var width = 1;
						    var id = setInterval(frame, 1);
						    function frame() {
						        if (width >= 100) {
						            clearInterval(id);
						        } else {
						            width++; 
						            elem.style.width = width + '%'; 
						        }
						    }
						}

						// function login(showhide){
						// 	if(showhide == "show"){
						// 	    document.getElementById('popupbox').style.visibility="visible";
						// 	}else if(showhide == "hide"){
						// 	    document.getElementById('popupbox').style.visibility="hidden"; 
						// 	}
						// 	}
							// Get the modal
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
					<script>
				    // function validateForm() {
				    //     var un = document.loginform.uid.value;
				    //     var pw = document.loginform.pwd.value;
				    //     var username = "uid"; 
				    //     var password = "pwd";
				    //     if ((un == username) && (pw == password)) {
				    //         return true;
				    //     }
				    //     else {
				    //         alert ("Login was unsuccessful, please check your username and password");
				    //         loginform.reset();
				    //         return false;
				            
				            
				    //     }
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
					
							<div id="id01" class="modal">
  								
							  <form class="modal-content animate" name="loginform" action="connectDB.php" method="POST">							    
							  <div class="imgcontainer">
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
  
							  <form class="modal2-content animate" method="POST" action="register.php"">
							    <div class="imgcontainer">
							      <span onclick="document.getElementById('id02').style.display='none'" class="closelog" title="Close Modal">&times;</span>
							      <img src="images/img_avatar2.png" style="max-height: 150px;max-width:150px;" alt="Avatar" class="avatar">
							    </div>

							    <div class="container">

							    	<label><b>First Name </b></label>
							      <input type="text" placeholder="Enter First Name" name="r_fname" required>
							      <label><b>Last Name</b></label>
							      <input type="text" placeholder="Enter Last Name" name="r_lname" required>
							      <label><b>Email Address</b></label>
							      <input type="text" placeholder="Email Address(www.example@gmail.com)" name="r_email" required>
							      <label><b>Username</b></label>
							      <input type="text" placeholder="Enter Username" name="r_uid" required>

							      <label><b>Password</b></label>
							      <input type="password" placeholder="Enter Password" name="r_pwd" required>
							        
							      
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
					
					
					<li><a href="javascript:void(0)"><span>Hello ! &nbsp;: </span></a><lable><input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" /></lable></li>
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
				<!-- <li><a href="store.html">Featured</a></li> -->
				<!-- <li><a href="blog.html">Blog</a></li> -->
				<li><a href="contact.php">Contact</a></li>
				<!-- <li><a href=""></a></li> -->
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
		    <div class="content-grids">
		    	
<div align="left" style="min-height:800px;">
	
	<div id="cart_wrapper" align="center">
	
		<form action="checkout.php" id="cart_form" name="cart_form" method="POST">
		
			<div class="cart-info"> </div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit" id="Submit" >CheckOut</button>
		
		</form>
	</div>
	
	<div id="wrap" align="center">
	<?php 
						    	
						    	
				if(isset($_SESSION['user_type'])){
					//echo $_SESSION['user_type'];
					if ($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='') {
						// echo '<a id="show_cart" href="javascript:void(0)">View My Cart</a>';
					}}
				 ?>
		
		<!-- <a id="show_cart" href="javascript:void(0)">View My Cart</a> -->

		
		<ul>
		<?php 
			$query  = "SELECT mphoto,mname,mid FROM mobiles WHERE mbrand='HTC'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
		 ?>
			<li class="productdiv" id="<?php echo $row['mid']; ?>"  >
				<?php echo '<img src= " data:image/png;base64,'.base64_encode( $row['mphoto']).'" class="items" alt=""  />'?>
				
				<br clear="all" />

				<div><?php echo $row['mname']; ?></div>
			</li>
			<?php 
				}
			}	
			 ?>
			
			
			
			<!-- Detail Boxes for above four li -->
			<?php 
			$query  = "SELECT mname, mdiscription, mphoto2, mspecifications, mprice,mid FROM mobiles";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
		 ?><script>
						function loadDoc() {
						  var xhttp = new XMLHttpRequest();
						  xhttp.onreadystatechange = function() {
						    if (this.readyState == 4 && this.status == 200) {
						      document.getElementById("detail-<?php echo $row['mid']; ?>").innerHTML = this.responseText;
						    }
						  };
						  xhttp.open("POST", "store.php", true);
						  xhttp.send();
						}
						</script>

			<div class="detail-view" id="detail-<?php echo $row['mid']; ?>" style="border-color: black;" >
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<!-- <img src="images/iphone7-jetblack-select-2016.png" class="detail_images" alt="" /> -->
				<?php echo '<img src= " data:image/png;base64,'.base64_encode( $row['mphoto2']).'" class="detail_images" alt="" />'?>
				<div class="detail_info" style="text-align: justify;background-color: #cce6ff;padding: 20px;">
					
					<label class='item_name' for="foo" id="foo_label"><h1 ><?php echo $row['mname']; ?></h1></label>
					<h1 id="h1styl" ><?php echo $row['mname']; ?></h1>
					<br clear="all" />
					
					<p>
						<?php echo $row['mdiscription']; ?>
								
						<br clear="all" /><br clear="all" />
						$ <span class="price" style="color: #ff1a1a;font-size: 18px;"><?php echo $row['mprice']; ?></span>
						
					</p>
					
					<br clear="all" />

					

					 
						  <form action="addtocart_new.php" method="POST"> 	
							<input type="hidden" value="<?php echo $row['mid']; ?>  " name="mid">
							<input type="hidden" value="1" name="quantity">
							<input type="hidden" value="<?php echo $row['mprice'];?>" name="mprice">
							<!-- <input type="hidden" value=" $_SESSION['user_name'] " name="username"> -->
							<input type="hidden" value="<?php echo $row['mname'];?>" name="mname">

							
					<?php	

					// 	</form>';	    	
				if(isset($_SESSION['user_type'])){
					//echo $_SESSION['user_type'];
					if ($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='') {

						echo '<input type="submit" name="add_to_cart"  class="add-to-cart-button" value="Add to cart" >';
					}
					else{
						alert("Please loging");
					}
				}
				 ?>
				 </form>
					
					<!-- <button  class="add-to-cart-button" onclick="" >Add to Cart</button> -->
					<form id="formspec" action="<?php echo $row['mspecifications']; ?>">
    						<button type="submit"  class="specifications-button" id="myBtn"  >Specification</button>
						</form>
					
					<!-- <div id="myProgress">
						  <div id="myBar"></div>
						</div> -->
					<br>
					<strong style="font-size: 13px; margin-top: 10px; font-weight: bold;"> <br><br> Our Partners : </strong><br>
					<img src="images/credit-cards-logos.png" id="imgvisa">
				</div>
							
			</div>
			<?php 
				}
			}	
			 ?>
			
			
			
			
			
			<br clear="all" />
		</ul>
		<br clear="all" />
	</div>
	
		
</div>

		    </div>
		    </div>
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
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
		</div>
	</body>
</html>

