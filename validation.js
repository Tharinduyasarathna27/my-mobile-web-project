	<?php 
include "logging.php";
 ?>				

						function validateForm() {
				        var un = document.loginform.uid.value;
				        var pw = document.loginform.pwd.value;
				        var username = "uid"; 
				        var password = "psw";
				        if ((un == username) && (pw == password)) {
				            return true;
				        }
				        else {
				            alert ("Login was unsuccessful, please check your username and password");
				            loginform.reset();
				            return false;
				            
				            
				        }
				  }



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