<?php

include 'logging.php';
	// echo $_POST['mid'];




        if (isset($_POST['add_to_cart'])) {
            // echo "<script>alert('p1');</script>";
            if(isset($_SESSION['shopping_cart'])){
                // echo "<script>alert('p2');</script>";
                $item_array_id=array_column($_SESSION['shopping_cart'],'item_id');
                if(!in_array($_POST['mid'], $item_array_id)){
                    // echo "<script>alert('p3');</script>";
                    $count = count($_SESSION['shopping_cart']);
                    $item_array=array(
                        'item_id'=> $_POST['mid'],
                        'item_name' => $_POST['mname'],
                        'item_price' => $_POST['mprice'],
                        'item_quantity' => $_POST['quantity'],
                        'cart_id' => $count
                    );
                    $_SESSION['shopping_cart'][$count]=$item_array;
                    echo "<script>window.location='checkout.php'</script>";
                }else{
                    // echo "<script>alert('p4');</script>";
                    echo "<script>alert('item already added.');</script>";
                    echo "<script>window.location='checkout.php'</script>";
                }
            }else{
                // echo "<script>alert('p5');</script>";
                $_SESSION['shopping_cart'][0]=array(
                    'item_id'=> $_POST['mid'],
                    'item_name' => $_POST['mname'],
                    'item_price' => $_POST['mprice'],
                    'item_quantity' => $_POST['quantity'],
                    'cart_id' => 0
                );
                echo "<script>window.location='checkout.php'</script>";
            }
        }
        
               



		// $mid = $_POST['mid'];
		// $quantity = $_POST['quantity'];
		// $mname= $_POST['mname'];
		
 		 // $query = "INSERT INTO `cart`( `mid`,`cart_mname`,`quantity`, `user_name`) VALUES ('".$mid."',  '".$mname."','".$quantity."', '".$username."')";
    //     // $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
    //    if($result = mysqli_query($connection, $query)) {
    //         echo "suc";
    //     }else{
    //         echo "erorr in query";
    //         echo "$result->error";
    //     }




        if(isset($_GET['delete'])){
            $cart_id=$_GET['delete'];
            
            // print_r($_SESSION['shopping_cart']);
          

            // echo "<script>alert($cart_id);</script>";
            echo '<script language="javascript">';
            echo 'alert("Drop Item")';
            echo '</script>';
              // $connection->query( "UPDATE mobiles set mstock=mstock+1  where mid= '".$_GET['mid']."'");
            
            unset($_SESSION['shopping_cart'][$cart_id]);
            echo "<script>window.location='checkout.php'</script>";
        }




 ?>