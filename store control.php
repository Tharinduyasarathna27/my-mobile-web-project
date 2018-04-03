<?php


 include 'logging.php';
    // If the values are posted, insert them into the database.
    
       $brands = $_POST['brands'];
        $itemname = $_POST['itemname'];
        // $pic1 = $_POST['pic1'];
        $pic1= addslashes(file_get_contents($_FILES["pic1"]["tmp_name"])); 
        $pic2 =addslashes(file_get_contents($_FILES["pic2"]["tmp_name"])); 
        // $pic2 = $_POST['pic2'];
        $Discription = $_POST['Discription'];
        $Specifications = $_POST['Specifications'];
        $price = $_POST['price'];
        $Quantity = $_POST['Quantity'];

         $query = "INSERT INTO `mobiles`( `mbrand`, `mname`, `mphoto`, `mdiscription`, `mphoto2`, `mspecifications`, `mprice`, `mstock`) VALUES ('".$brands."','".$itemname."','".$pic1."','".$Discription."','".$pic2."','".$Specifications."','".$price."','".$Quantity."')";
        // $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";

       if($result = mysqli_query($connection, $query)) {
             if(!$result->error){
            $smsg = "User Created Successfully.";
            header("Location:items add.php");
            }else{
            $fmsg ="User Registration Failed".$result->error;
            }
        }else{
            echo "erorr in query";
            echo "$result->error";
        }
    

                                       

 ?>
